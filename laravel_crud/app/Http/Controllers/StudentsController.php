<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

use Illuminate\Support\Facades\Input;

use DB;

use Illuminate\Support\Facades\Validator;

use App\Quotation;

class StudentsController extends Controller
{
    public function create()
    {
        try {
    	   return view("admin.students.create");
        } catch (\Exception $e) {
            echo 'caught exception', $e->getMessage();
        }
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|alpha|min:2|max:40',
            'email' => 'required|email|unique:users',
            'Gender' => 'required|alpha',
            'Department' => 'required',
            'Sports' => 'required',
            'Colors' => 'required',
            'Physics' => 'required|integer|between:1,100',
            'Chemistry' => 'required|integer|between:1,100',
            'Maths' => 'required|integer|between:1,100'
        ]);
        try {
            $SportsArrayToString = '';
            foreach($request->Sports as $Sport) {
                $SportsArrayToString .= $Sport . ","; 
            }
            $request['Sports'] = rtrim($SportsArrayToString, ','); 
            $ColorsArrayToString = '';
            foreach($request->Colors as $Color) {
                $ColorsArrayToString .= $Color . ","; 
            }
            $request['Colors'] = rtrim($ColorsArrayToString, ','); 
            Student::create($request->all());
            return redirect('/')->with('message', 'Student record created successfully!'); 
        } catch (\Exception $e) {
            echo 'caught exception', $e->getMessage();
        }
    }
    public function index()
    {
        try {
            $students = Student::all();
            return view('admin.students.index')->with('students',$students);
        } catch(\Exception $e) {
            echo 'caught exception', $e->getMessage();
        }
    }
    public function delete($id)
    {
        try {
            $students = Student::findOrFail($id);
            $students->delete();
            return redirect('/')->with('message', 'Student record deleted successfully!'); 
        } catch (\Exception $e) {
            echo 'caught exception', $e->getMessage();
        }
    }
    public function edit($id)
    {
        try {
            $students = Student::find($id);
            return view('admin.students.edit')->with('students', $students);
        } catch (\Exception $e) {
            echo 'caught exception', $e->getMessage();
        }
    }
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|alpha|min:2|max:40',
            'email' => 'required|email',
            'Gender' => 'required|alpha',
            'Department' => 'required|alpha',
            'Sports' => 'required',
            'Colors' => 'required',
            'Physics' => 'required|integer|between:1,100',
            'Chemistry' => 'required|integer|between:1,100',
            'Maths' => 'required|integer|between:1,100',
        ]);
        try {
            $SportsArrayToString = '';
            foreach($request->Sports as $Sport) {
                $SportsArrayToString .= $Sport . ",";
            }
            $request['Sports'] = rtrim($SportsArrayToString, ','); 
            $ColorsArrayToString = '';
            foreach($request->Colors as $Color) {
                $ColorsArrayToString .= $Color . ",";
            }
            $request['Colors'] = rtrim($ColorsArrayToString, ','); 
            $students = Student::find($id);
            $students->name = $request->name;
            $students->email = $request->email;
            $students->Gender = $request->Gender;
            $students->Department = $request->Department;
            $students->Sports = $request->Sports;
            $students->Colors = $request->Colors;
            $students->Physics = $request->Physics;
            $students->Chemistry = $request->Chemistry;
            $students->Maths = $request->Maths;
            $students->update();
            return redirect('/')->with('message','Student record has been edited!');
        } catch (\Exception $e) {
            echo 'caught exception', $e->getMessage();
        }
    }
}


