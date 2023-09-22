<?php

namespace Modules\Email\Entities;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmailForwardModel extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected static function newFactory()
    {
        return \Modules\Email\Database\factories\EmailForwardModelFactory::new();
    }

    public function sendEmail($email_details){
        $template =  view('Email::index',$email_details);
        $htmlContent = $template->render();
        $email_html = '';
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
    public function secureVerficationUrl($user){
        // $verificationUrl = URL::temporarySignedRoute(
        //     'verification.verify', // Name of the verification route
        //     now()->addMinutes(60), // Expiry time (adjust as needed)
        //     ['id' => $user->id, 'hash' => sha1($user->email)] // Parameters
        // );
        $type = 'admin';
        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['userType' => $type, 'id' => $user->id, 'hash' => sha1($user->email)]
        );
        // dd($verificationUrl);
        return $verificationUrl;
    }
}
