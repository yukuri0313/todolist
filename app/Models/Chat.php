<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Course;
class Chat extends Model
{
    public function ChatUser() {
        return $this->belongsTo(User::class);
    }

    public function ChatCourse() {
        return $this->belongsTo(Course::class);
    }
}
