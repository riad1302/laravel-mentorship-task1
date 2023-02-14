<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function create()
    {
        return view('referrals.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email'
        ]);
        
    }
}
