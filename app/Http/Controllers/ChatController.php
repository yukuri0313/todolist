<?php

namespace App\Http\Controllers;
use App\Models\Chat;
use App\Models\Course;
use App\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function show($id) {
        $allstatements = Chat::query();
        $coursechats = $allstatements->where('course_id', $id)->orderby('created_at', 'asc')->get();
       

        $course = Course::find($id);
        $course_name = $course->lecture_name;
        
        return view('chats.chat')->with([
            'coursechats' => $coursechats,
            'course_name' => $course_name
            ]);
    }
}
