<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // READ
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // CREATE FORM
    public function create()
    {
        return view('students.create');
    }

    // STORE
    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect()->route('students.index');
    }

    // EDIT FORM
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    // UPDATE
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->update($request->all());
        return redirect()->route('students.index');
    }

    // DELETE
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect()->route('students.index');
    }
}