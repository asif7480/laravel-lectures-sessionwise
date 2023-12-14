<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// importing the model
use App\Models\Student;


class StudentController extends Controller
{
    public function index(){
        $student = Student::all();
        return view('index', compact('student'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $student = new Student;
        $student->name = $request->input('name');
        $student->course = $request->input('course');
        $student->contact = $request->input('contact');
        $student->save();

        return redirect('students');
    }


    public function edit($id){
        $student = Student::find($id);
        return view('edit', compact('student'));
    }

    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->course = $request->input('course');
        $student->contact = $request->input('contact');
        $student->update();

        return redirect('students');
    }

    public function delete($id){
        $employee = Student::find($id);
        $employee->delete();
        return redirect('students');
    }
}