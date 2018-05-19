<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class StudentController extends Controller
{
    public function studentForm()
    {
        return view('student-form');
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::where('id', $id)->first();
        return view('updateStudent')->with(['id' => id, 'student' => $student]);


    }

    public function create()
    {
        $student = new Student();
        $student->name = Input::get('name');
        $student->rollnumber = Input::get('rollnumber');
        $student->email = Input::get('email');
        $student->phone = Input::get('phone');
        $student->save();
        return 'Insert success';
    }

    public function select()
    {
        $student = Student::all();
        return view::make('list-student')->with('student', $student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = Input::get('name');
        $student->rollnumber = Input::get('rollnumber');
        $student->email = Input::get('email');
        $student->phone = Input::get('phone');
        $student->save();
        return 'Update thành công ';

    }

    public function delete(Request $request, $id)
    {
        $student = Student::find($id);
        $student->delete();
        return 'xoá thành công ';
    }
}
