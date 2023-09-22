<?php

namespace Modules\AdminProfessor\Entities;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Admin extends Model implements Authenticatable
{
    use HasFactory , AuthenticatableTrait;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\AdminProfessor\Database\factories\AdminFactory::new();
    }
    public function hasVerifiedEmail()
    {
        return $this->email_verified_at !== null;
    }

    public function markEmailAsVerified()
    {
        $this->email_verified_at = now();
        $this->save();
    }

    public function sendEmailVerificationNotification()
    {
        // Add your email notification logic here
    }
}
