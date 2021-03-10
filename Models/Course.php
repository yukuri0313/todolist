<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Registration;
use App\Models\Chat;

class Course extends Model
{
    protected $fillable = [
        'lecture_name','professor_name','campus',
    ];
    
    public function CourseRegistration() {
    return $this->hasMany(Registration::class);
    }

    public function CourseReport() {
    return $this->hasMany(Registration::class);
    }
    
    public function CourseChat() {
        return $this->hasMany(Chat::class);
        }
}