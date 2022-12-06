<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.courseCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|max:255',
            'section' => 'required|min:1|max:3',
            'room' => 'required|min:1'
        ]);

        $invitationCode = substr(md5($request->name), 0, 8);

        Course::create([
            'name' => $request->name,
            'section' => $request->section,
            'room' => $request->room,
            'invitation-code' => $invitationCode,
            'user_id' => Auth::id()
        ]);

        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        return view('courses.courseShow', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.courseEdit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|min:5|max:255',
            'section' => 'required|min:1|max:3',
            'room' => 'required|min:1'
        ]);

        $course->name = $request->name;
        $course->section = $request->section;
        $course->room = $request->room;
        $course->save();

        Course::where('id', $course->id)->update($request->except('_token', '_method'));

        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect('user');
    }

    public function list($id)
    {
        $course = Course::where('id', $id)->first();
        $teacher = User::where('id', $course->id)->first();
        $students_id = DB::table('course_user')->where('course_id', $course->id)->get();
        $students = [];

        foreach($students_id as $s) {
            array_push($students, User::where('id', $s->user_id)->first());
        }

        return view('courses.studentList', compact('course', 'teacher', 'students'));
    }
}
