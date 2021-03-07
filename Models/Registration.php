<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Course;

class Registration extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public static function findByUser(User $user) {
        return Registration::where('user_id', $user->id);
    }
}
