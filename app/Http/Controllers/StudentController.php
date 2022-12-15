<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInfoModel;

class StudentController extends Controller
{
    public function addStdShow()
    {
        return view('addStudent');
    }

    public function addStudent(Request $request)
    {
        $addStudent = new StudentInfoModel;

        $addStudent->studentFName     =  $request->studentFName;  
        $addStudent->studentLName     =  $request->studentLName; 
        $addStudent->studentEmailId   =  $request->studentEmailId; 
        $addStudent->studentContactNo =  $request->studentContactNo;

        if($addStudent->save()){
            return redirect()->route('allStd')->with('success','Student created successfully');
        }else{
            return redirect()->route('allStd')->with('error','Something went wrong!');
        }
    }

    public function allStudent()
    {
        $students = StudentInfoModel::all();
        return view('viewAllStudent',compact('students'));
    }

    public function editStudent($Id)
    {
        $student = StudentInfoModel::where('id',$Id)->first();
        return view('editStudent',compact('student'));
    }

    public function updateStudent($Id,Request $request)
    {
        $editStudent = StudentInfoModel::where('id',$Id)->first();

        $editStudent->studentFName     =  $request->studentFName;  
        $editStudent->studentLName     =  $request->studentLName; 
        $editStudent->studentEmailId   =  $request->studentEmailId; 
        $editStudent->studentContactNo =  $request->studentContactNo;
       
        if($editStudent->update()){
            return redirect()->route('allStd')->with('success','Student updated successfully');
        }else{
            return redirect()->route('allStd')->with('error','Something went wrong!');
        }
    }

    public function deleteStudent($Id)
    {
        $del = StudentInfoModel::where('id',$Id)->delete();
        if($del)
        {
            return redirect()->route('allStd')->with('success','Student deleted successfully');
        }else{
            return redirect()->route('allStd')->with('error'  ,'Something went wrong!');
        }
    }
}
