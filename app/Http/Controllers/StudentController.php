<?php

namespace App\Http\Controllers;

use App\Student;
use App\Department;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.index', ['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('admin.student.create', ['departments'=>$departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the students up comming data
        $this->validate($request, [
            'id' => 'required',
            'reg'=> 'required',
            'name'=> 'required',
            'father_name'=> 'required',
            'mother_name'=> 'required',
            'present_address'=> 'required',
            'permanent_address'=> 'required',
            'picture'=> 'required',
            'contact'=> 'required',
            'department'=> 'required',
            'dob'=> 'required',
            'semester'=> 'required',
        ]);
        // validate up-comming
        if ($request->hasFile('picture')) {
            $imgStore = Storage::putFile('public/students', $request->file('picture'));
        }

        $department = Department::find($request->department);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->reg;
        $user->type = 'student';

        $user->save();

        // create student class object
        $student = new Student();
        // store upcomming data into variable
        $student->id = $request->id;
        $student->reg = $request->reg;
        $student->name = $request->name;
        $student->father_name = $request->father_name;
        $student->mother_name = $request->mother_name;
        $student->present_address = $request->present_address;
        $student->permanent_address = $request->permanent_address;
        $student->contact = $request->contact;
        $student->dob = $request->dob;
        $student->semester = $request->semester;
        $student->user_id = $user->id;

        $student->picture = ($request->hasFile('picture')) ? $imgStore: "";
        // store data into the Database
        $department->students()->save($student);

        // $user->parks()->attach($park->id, ['weather' => $weather->id]);

        if(isset($request->submit) && $request->submit == "continue") {
            return back();
        } else {
            return redirect('/students');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return Student::find($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
