<?php
namespace App;
interface Verifiable
{
    public function hasVerifiedEmail();
    public function markEmailAsVerified();
    public function sendEmailVerificationNotification();
}
?>
