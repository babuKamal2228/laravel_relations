<?php

namespace App\Http\Controllers;
use App\Models\Student;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
class studentController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //   $student = Student::active()->get(); active just for localscope his function is created in model student
    // $student = Student::get();
    //   return view('students.list',compact('student'));
    $student = Student::get();

      return view('students.list',compact('student'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        // name	father_name	date_of_birth	cnic	address	city	religion	phone_number
            $student = Student::create([
                'name' =>$request->name,
                'father_name' => $request->father_name,
                'date_of_birth' => $request->date_of_birth,
                'cnic' => $request->cnic,
                'address' => $request->address,
                'city' => $request->city,
                'religion' => $request->religion,
                 'class_id' => $request->class,
                'phone_number' => $request->phone_number,
            ]);


    // Validation
    $request->validate([
        'image' => 'required|mimes:png,jpg,jpeg|max:2048',
    ]);

    // File handle
    $file = $request->file('image');
    $fileName = time() . '-' . $file->getClientOriginalName(); // unique naam
    $path = $file->storeAs('images', $fileName, 'public');

    // Database me path save
    Photo::create([
        'image_path' => $path,
        'student_id' =>$student->id,
    ]);

    // Response / return



            if($student){
                return redirect()->route('student.list')->with('msg','Data has been Successfully Added');
            }else{
                return redirect()->route('student.list')->with('msgs','Data is not added');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $student = Student::find($id);
        // // return view('show' ,compact('student'));
        // return $student;
//          $student = Student::with('class')->find(1);


//  return $student->name . $student->classes->clasess_id;


                $student = Student::with(['classi','photo'])->find($id);
                // return $students->name;
        return view('students.show',compact('student'));


//


            // return $student->name . ' ' . $student->class->id;
            // ya agar tumhe class ka naam chahiye:
            // return  $student->classi->clasess;



        // $stu = $student->classes->clasess;
        // return $stu;
        // foreach($student->classes as $value){
        //     return $value->clasess;
        // }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
                $student = Student::find($id);
        return view('students.edit',compact('student'));
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
        $student = Student::where('id',$id)->update([
                 'name' =>$request->name,
                'father_name' => $request->father_name,
                'date_of_birth' => $request->date_of_birth,
                'cnic' => $request->cnic,
                'address' => $request->address,
                'city' => $request->city,
                'religion' => $request->religion,
                'phone_number' => $request->phone_number,
        ]);
        return redirect()->route('student.list')->with('update_message', 'Data Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

        public function destroy($id)
{
    $student = Student::with('photo')->findOrFail($id);

    // 1. File delete karo agar chahiye
    if ($student->photo && file_exists(public_path($student->photo->image_path))) {
        unlink(public_path($student->photo->image_path));
    }

    // 2. Photo record delete karo
    if ($student->photo) {
        $student->photo->delete();
    }

    // 3. Student delete karo
    $student->delete();

    return redirect()->back()->with('deletemsg', 'Student aur uski photo delete ho gayi');
}


        // Student::destroy($id);
        // return redirect()->route('student.list')->with('deletemsg','Data is Successfully Deleted');
    }

