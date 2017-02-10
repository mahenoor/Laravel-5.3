<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Student;

use Illuminate\Support\Facades\Input;

use DB;

use Illuminate\Support\Facades\Validator;

use App\Quotation;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $students = Student::orderBy('id','DESC')->paginate(5);
        return view('Student.index',compact('students'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Student.create');
    }

    public function validationOfRecords(Request $request)
    {
        $validate = $this->validate($request, [
            'Name' => 'required|alpha|min:2|max:40',
            'Email' => 'required|Email|unique:users',
            'Gender' => 'required|alpha',
            'Department' => 'required',
            'Sports' => 'required',
            'Color' => 'required',
            'Physics' => 'required|integer|between:1,100',
            'Chemistry' => 'required|integer|between:1,100',
            'Maths' => 'required|integer|between:1,100'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validationResult = $this->validationOfRecords($request);
		Student::create($request->all());
        return redirect()->route('Student.index')
                        ->with('success','Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::find($id);
        return view('Student.show',compact('students'));
        dd($students); exit;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('Student.edit',compact('students'));
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
        $validationResult = $this->validationOfRecords($request);
		Student::find($id)->update($request->all());
        return redirect()->route('Student.index')
                        ->with('success','Item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete();
        return redirect()->route('Student.index')
                        ->with('success','Item deleted successfully');
    }

}
