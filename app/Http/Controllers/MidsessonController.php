<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course;
use App\Student;
use App\Department;

class MidsessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $departments = Department::all();
        return view('admin.midsesson.index', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $department = Department::find($request->department);
        $courses = $department->courses()->with('students')->where('semester', $request->semester)->get();
        $students = $department->students()->with('courses')->where('semester', $request->semester)->get();

        return view('admin.midsesson.create', ['courses'=> $courses, 'students' => $students]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //validate upcomming data
        $this->validate($request, [

        ]);
        $mids = $request->mids;
        $sessons = $request->sessons;
        $students = $request->students;

        foreach ($students as $id => $student) {
            $s = Student::find($student);

            foreach ($mids as $key => $mark) {
                $c = Course::find($key);
                $has = $s->courses()->where('course_code', $c->code)->exists();

                if($has){
                    $s->courses()->newPivotStatement()->where('course_code', $c->code)->update(['midterm_marks'=> $mark]);
                } else {
                    $s->courses()->attach($c, ['midterm_marks' => $mark]);
                }

                // $s->courses()->sync($c, ['midterm_marks' => $mark]);
                // $s->courses()->attach($c, ['' => 100, 'price' => 49.99]);
                // 'midterm_marks', 'sessonal_marks', 'final_marks', 'grade_point'
            }

            foreach ($sessons as $key => $mark) {
                $c = Course::find($key);
                $has = $s->courses()->where('course_code', $c->code)->exists();

                if($has){
                    $s->courses()->newPivotStatement()->where('course_code', $c->code)->update(['sessonal_marks'=> $mark]);
                } else {
                    $s->courses()->attach($c, ['sessonal_marks' => $mark]);
                }
                // $s->courses()->attach($c, ['' => 100, 'price' => 49.99]);
                // 'midterm_marks', 'sessonal_marks', 'final_marks', 'grade_point'
            }
        }

        die();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
