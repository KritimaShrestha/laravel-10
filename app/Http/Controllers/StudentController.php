<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {   $students=Student::all();
        return view('student.index',compact('students'));
    }
    public function create()
    {
        return view('student.create');
    }
    public function store(Request $request)
    {
        $student=new Student();
        $student->name = $request->input('name');
        $student->phone=$request->input('phone');
        $student->email=$request->input('email');
        $student->address=$request->input('address');
        $student->save();
        return redirect()->route('student');
    }
    public function edit($id)
    {
        $student=Student::find($id);
        return view('student/edit',compact('student'));
    }
    public function update(Request $request,$id)
    {
    $student=Student::find($id);
    $student->name = $request->input('name');
    $student->phone = $request->input('phone');
    $student->email = $request->input('email');
    $student->address = $request->input('address');

    
    $student->save();
    return redirect()->route('student/index');
    }
    public function destroy(Request $request,$id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect()->route('student/index');
    }
}
?>