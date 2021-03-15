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
    
    public function registration() {
    return $this->hasMany(Registration::class);
    }

    public function report() {
    return $this->hasMany(Report::class);
    }
    
    public function chat() {
        return $this->hasMany(Chat::class);
        }
}