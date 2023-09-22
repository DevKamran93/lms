<?php

namespace App\Listeners;

use App\Events\Verified;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Modules\Email\Entities\EmailForwardModel;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Verified $event)
    {
        $EmailForwardModel = new EmailForwardModel();
        $email_details['toEmail'] = $event->user->email;
        $email_details['subject'] = 'Email Verified';
        $email_details['pageTitle'] = 'Email Verified';
        $email_details['htmlbody'] = 'Thank Your for Verifying your email address. Your Email Address has been verified successfully.';
        $template =  view('Email::index',$email_details);
        $htmlContent = $template->render();
        // $EmailForwardModel->sendEmail($emailDetails);
        try {
            // $email_html = view('admin.emails.emailTemplate', $email_details)->render();
            // dd($template);
            // Send the email with the HTML content
            $check = Mail::send([], [], function ($message) use ($email_details, $htmlContent) {
                if (array_key_exists('from_email', $email_details)) {
                    $message->from($email_details['from_email'], 'LMS');
                } else {
                    $message->from('abbasrahim705@gmail.com', 'LMS');
                }

                if (array_key_exists('subject', $email_details)) {
                    $message->subject($email_details['subject']);
                } else {
                    $message->subject("Welcome");
                }

                $message->to($email_details['to_email']);

                // Set the HTML content of the email
                $message->html($htmlContent, 'text/html');
            });
            // $this->saveEmail($email_details['pageTitle'],$email_html,$email_details);
            return true;

        } catch (\Throwable $e) {
            return false;
        }

    }
}
