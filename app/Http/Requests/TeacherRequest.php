<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            ////  teacher_id, teacher_firstname, teacher_lastname, teacher_designation, Gender, email
            'teacher_id' => 'required',
        'teacher_firstname' => 'required',
        'teacher_lastname' => 'required|',
        'teacher_designation' => 'required',
        'Gender' => 'required',
        'email' =>'required|email',

        ];
    }
}
