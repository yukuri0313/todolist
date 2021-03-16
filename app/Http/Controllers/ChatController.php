<?php

namespace App\Http\Controllers;
use App\Models\Chat;
use App\Models\Course;
use App\Models\Registration;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function show($id) {
        $speaker = Auth::id();

        $coursechats = Chat::where('course_id', $id)->orderby('created_at', 'asc')->get();
       
        $takingclasses = Registration::where('user_id', $speaker)->get();


        $course = Course::find($id);
        $course_name = $course->lecture_name;

        
        return view('chats.chat')->with([
            'coursechats' => $coursechats,
            'course_name' => $course_name,
            'speaker' => $speaker,
            'takingclasses' => $takingclasses
            ]); 
    }

    public function create(Request $request, $id) {
        $post = new Chat;
        $post->statement = $request->saying;
        $post->user()->associate(Auth::user());
        $post->course_id = $id;
        $post->save();
    }
}
