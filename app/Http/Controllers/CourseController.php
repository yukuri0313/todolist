<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\Registration;
use Illuminate\Http\Request;
use App\Http\Requests\User\UpdateRequest;


class CourseController extends Controller
{
    //選択した曜日によって変数に格納する代入値を変化させる
    public function campus_sort() {
        $courses = DB::select("SELECT * FROM courses WHERE campus='日吉'");
        $courses2 = DB::select("SELECT * FROM courses WHERE campus='三田'" );
        $courses3 = DB::select("SELECT * FROM courses WHERE campus='SFC'" );
       
        return view('courses.course')->with([
            "courses" => $courses,
            "courses2" => $courses2,
            "courses3" => $courses3
            ]);
    }

    public function match(Request $request) {
        $lectures = Course::query();

        //入力内容の取得
        $search1 = $request->get('lecture');
        $search2 = $request->get('professor');
        $search3 = $request->get('campus');

        //教授名が空白の場合
        if (empty($search2)) {

            if(in_array($search3, ['日吉', '三田', 'SFC'])) {
                $results = $lectures->where('campus', $search3)->where('lecture_name', 'like', '%'.$search1.'%')->get();
            }else {
                $results = $lectures->where('lecture_name', 'like', '%'.$search1.'%')->get();
            }
            return view('courses.search', ['results' => $results]);
        } 

        //教授名に入力がある場合
        if($search3 == '指定なし' && !empty($search2)) {
            $results = $lectures->where('lecture_name', 'like', '%'.$search1.'%')->get();
            return view('courses.search', ['results' => $results]);
        }

        if($search3 == '日吉' && !empty($search2)) {
            $results = $lectures->where('campus','日吉')->where('lecture_name', 'like', '%'.$search1.'%')->get();
            return view('courses.search', ['results' => $results]);
        }

        if($search3 == '三田' && !empty($search2)) {
            $results = $lectures->where('campus','三田')->where('lecture_name', 'like', '%'.$search1.'%')->get();
            return view('courses.search', ['results' => $results]);
        }

        if($search3 == '湘南藤沢' && !empty($search2)) {
            $results = $lectures->where('campus','SFC')->where('lecture_name', 'like', '%'.$search1.'%')->get();
            return view('courses.search', ['results' => $results]);
        }
    }
    //時間割表示＠マイページ
    public function show() {
        $registrations = Registration::findByUser(Auth::user())->get();
        
        $registrations = $registrations->mapToGroups(function (Registration $item) {
            return [$item->course->period => $item];
        })->union([
            1 => [], 2 => [], 3 => [], 4 => [], 5 => []
        ])->sortKeys()->map(function ($registrations) {
            return collect($registrations)->mapWithKeys(function (Registration $item) {
                return [$item->course->day => $item];
            })->union ([
                1 => null, 2 => null, 3 => null, 4 => null, 5 => null, 6=>null
            ])->sortKeys();
        });

        return view('mypage', ['registrations' => $registrations]);
    }

    public function register(Course $course) {
        
        $registrations = Registration::findByUser(Auth::user())->where('course_id', $course->id)->get();

        if(count($registrations) != 0) {
            session()->flash('registration_message', '既に登録済みの授業です');
           return redirect()->back(); 
    } 
        $subject = new Registration();
        $subject->course_id = $course->id;
        $subject->user()->associate(Auth::user());
        $subject->save();

        return redirect()->back();
    }
}