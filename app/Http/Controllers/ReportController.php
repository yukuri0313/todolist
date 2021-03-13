<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;
use App\Http\Requests\Report\UpdateRequest;
use Illuminate\Http\Request;


class ReportController extends Controller
{
    public function show() {
        $reports = Report::query();
        $stu = Auth::id();

        $uncompletedreports = $reports->where('user_id', $stu)->where('completed_or_not', 1)->orderby('deadline', 'asc')->get();
        $donereports = $reports->where('user_id', $stu)->where('completed_or_not', 2)->get();
        
        $date = now(); 
        $dead = $date->addDay(3);
        dd($donereports);

        return view('reports.report')->with([
            "uncompletedreports" => $uncompletedreports,
            "donereports" => $donereports,
            "date" => $date,
            "dead" => $dead
            ]);
    }

    public function add(Course $report) {
        $addedreports = $report->lecture_name;
        $addedreportsids = $report->id;
        
        return view('reports.add')->with([
            "addedreports" => $addedreports,
            "addedreportsids" => $addedreportsids
            ]);
    }

    public function append(Request $request, $id) {
        $courses = Course::find($id);
        $course_id = $courses->id;

        $tasks = new Report();
        $tasks->user_id = Auth::id();
        $tasks->course_id = $course_id;
        $tasks->name = $request->report_name;
        $tasks->outline = $request->outline;
        $tasks->words = $request->words;
        $tasks->deadline = $request->deadline;
        $tasks->completed_or_not = 1;
        $tasks->save();
    }

    public function complete(Report $report) {
        $report->completed_or_not = 2;
        $report->save();
    }
}
