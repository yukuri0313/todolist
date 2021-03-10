<?php

namespace App;

use App\Models\Registration;
use App\Models\Report;
use App\Models\Chat;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function UserRegistration() {
    return $this->hasMany(Registration::class);
    }

    public function UserReport() {
        return $this->hasMany(Report::class);
        }

    public function UserChat() {
        return $this->hasMany(Chat::class);
        }
}