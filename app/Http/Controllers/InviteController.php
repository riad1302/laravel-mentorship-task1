<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Models\Invite;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class InviteController extends Controller
{
    public function create()
    {
        return view('referrals.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email'
        ]);
        $validator->after(function ($validator) use ($request) {
            if (Invite::where('email', $request->email)->exists()) {
                $validator->errors()->add('email', 'There exists an invite with this email!');
            }
        });
        if ($validator->fails()) {
            return redirect('/referrals/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        do {
            $token = Str::random(20);
        } while (Invite::where('token', $token)->first());

        $insert = Invite::create([
            'user_id' => Auth::user()->id,
            'token' => $token,
            'email' => $request->email
        ]);
        $url = URL::signedRoute('register', ['refer' => $token]);
        if ($insert && $url) {
            $emailInfo = [
                'email' => $request->email,
                'senderEmail' => Auth::user()->email,
                'senderName' => Auth::user()->name,
                'link' => $url
            ];
            SendEmailJob::dispatch($emailInfo);
        }

        
    }
}
