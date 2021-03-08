<?php

namespace App\Models;
use App\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function report() {
        return $this->belongsTo(User::class);
    }

    public function course() {
        return $this->belongsTo(Course::class);
    }
}
