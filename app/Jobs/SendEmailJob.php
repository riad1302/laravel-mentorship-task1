<?php

namespace App\Jobs;

use App\Mail\invitedEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $emailInfo;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($emailInfo)
    {
        $this->emailInfo = $emailInfo;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new invitedEmail($this->emailInfo);
        Mail::to($this->emailInfo['email'])->send($email);
    }
}
