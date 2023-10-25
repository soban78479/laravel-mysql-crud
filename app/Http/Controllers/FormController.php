<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class FormController extends Controller
{
    public function index()
    {
        return view('pages.form');
    }

    public function submit(Request $request)
    {
        $student = new Student;
        $student->fill($request->all()); // Mass assignment
        $selectedSubjects = $request->input('subject');
        $student->subject = implode(', ', $selectedSubjects);

        $student->save(); // Save the model to the database

        return redirect('table'); //
    }
    public function showStudents()
    {
        $students = Student::all();
        return view('pages.table', compact('students'));
    }

    public function delete($id)
    {
        // Find the student by ID and delete it

        $student = Student::find($id);
        if (!is_null($student)) {
            $student->delete();
        }

        return redirect('table');
    }
    public function edit($id)
    {
        // Find the student by ID and delete it

        $student = Student::find($id);
        if (is_null($student)) {
            return redirect('table');
        }
          else{
            $data = compact('student');

            $subject=$student->subject = explode(', ', $student->subject);
            return view('pages.update')->with($data,$subject);
          }
      
    }

    public function update($id, Request $request)
    {
        // Find the student by ID and delete it

        $student =  Student::find($id);
        $student->name = $request['name'];
        $student->roll_no = $request['roll_no'];
        $student->gender = $request['gender'];
        $student->dob = $request['dob'];
        $student->email = $request['email'];
        $student->phone_no = $request['phone_no'];
        $student->country = $request['country'];
        $student->comment = $request['comment'];
  
        $selectedSubjects = $request->input('subject');
        $student->subject = implode(', ', $selectedSubjects);


        $student->save(); // Save the model to the database

        return redirect('table'); //
      
    }
}
