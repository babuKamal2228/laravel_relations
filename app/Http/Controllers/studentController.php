<?php

namespace App\Http\Controllers;
use App\Models\Student;
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
      $student = Student::get();
      return view('list',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create');
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
                'phone_number' => $request->phone_number,
            ]);
            if($student){
                return redirect()->route('student.create')->with('msg','Data has been Successfully Added');
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
        $student = Student::find($id);
        // return view('show' ,compact('student'));
        return $student;
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
        return view('edit',compact('student'));
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
    //     Student::destroy($id);
    //     return redirect()->route('student.list')->with('deletemsg','Data is Successfully Deleted');
    }
}
