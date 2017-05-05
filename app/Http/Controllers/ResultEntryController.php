<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Student;
use App\Department;

class ResultEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('admin.result.index', ['departments' => $departments]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function custom()
    {
        $departments = Department::all();
        return view('admin.result.custom', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         //
         $courses = Course::with('students')->where('semester', '1-1')->get();
         $students = Student::with('courses')->where('semester', '1-1')->get();

         return view('admin.result.create', ['courses'=> $courses, 'students' => $students]);

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view(Request $request)
    {
        $department = Department::find($request->department);
        $courses = $department->courses()->with('students')->where('semester', $request->semester)->get();
        $students = $department->students()->with('courses')->where('semester', $request->semester)->get();

        return view('admin.result.create', ['courses'=> $courses, 'students' => $students]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate upcomming data
        $this->validate($request, [

        ]);
        $marks = $request->marks;
        $students = $request->students;

        foreach ($students as $id => $student) {
            $s = Student::find($student);

            foreach ($marks as $key => $mark) {
                $c = Course::find($key);
                $has = $s->courses()->where('course_code', $c->code)->exists();

                if($has){
                    $s->courses()->newPivotStatement()->where('course_code', $c->code)->update(['final_marks'=> $mark]);
                } else {
                    $s->courses()->attach($c, ['final_marks' => $mark]);
                }

                $p= $s->courses->find($c);
                $mid = $p->pivot->midterm_marks;
                $sessonal = $p->pivot->sessonal_marks;
                $final = $p->pivot->final_marks;

                $total = $mid + $sessonal + $final;
                if($total >= 40 && $total < 45 ){
                    $p->pivot->grade_point = 2.00;
                } else if($total >= 45 && $total < 50){
                    $p->pivot->grade_point =  2.50;
                } else if($total >= 50 && $total < 55){
                    $p->pivot->grade_point =  2.75;
                } else if($total >= 55 && $total < 60){
                    $p->pivot->grade_point =  3.00;
                } else if($total >= 60 && $total < 65){
                    $p->pivot->grade_point =  3.25;
                } else if($total >= 65 && $total < 75){
                    $p->pivot->grade_point =  3.50;
                } else if($total >= 75 && $total < 80){
                    return 3.75;
                } else if($total >= 80 && $total <= 100){
                    $p->pivot->grade_point =  4.00;
                } else {
                    $p->pivot->grade_point =  0.00;
                }
                $p->pivot->save();

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
