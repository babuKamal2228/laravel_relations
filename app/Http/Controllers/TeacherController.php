<?php

namespace App\Http\Controllers;
use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $teacher = Teacher::get();
      return view('teachers.list',compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // teacher_id, teacher_firstname, teacher_lastname, teacher_designation, Gender, email
             $teacher = Teacher::create([
                'teacher_id' => $request->teacher_id,
                'teacher_firstname' => $request->teacher_firstname,
                'teacher_lastname' => $request->teacher_lastname,
                'teacher_designation' => $request->teacher_designation,
                'Gender' => $request->Gender,
                'email' => $request->email

            ]);
            // return $teacher;
            if($teacher){
                return redirect()->route('teachers.list')->with('msg','Data has been Successfully Added');
            }else{
                return redirect()->route('teachers.list')->with('msgs','Data is not added');
            }
    }



      public function show($id)
    {
        $teacher = Teacher::find($id);
        // return view('show' ,compact('student'));
        return $teacher;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
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
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $teacher = Teacher::create([

                'teacher_id' => $request->teacher_id,
                'first_name' => $request->first_name,
                'teacher_lastname' => $request->teacher_lastname,
                'teacher_designation' => $request->teacher_designation,
                'Gender' => $request->Gender,
                'email' => $request->email,

            ]);
            if($student){
                return redirect()->route('teachers.list')->with('msg','Data has been Successfully Added');
            }else{
                return redirect()->route('teachers.list')->with('msgs','Data is not added');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
