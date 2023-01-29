<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class RegisterController extends Controller
{
   
    public function index(Request $request)
    {
         $search =$request['search'] ?? "";
         if($search){
             $students = student::where('fname','LIKE',"$search%")->orwhere('lname','LIKE',"$search%")->get();
         }else{
             $students = student::all();   
         }       
        return view('allStudents',compact('students' , 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
       return view('studentCreate');
       
    }

   
    public function store(Request $request)
    {
          
        $request->validate(
            [
                'fname'=>'required',
                'lname'=>'required',
                'email'=>'required|email|unique:students',
                'dob'=>'required',
                'phone'=>'required|digits:10',
                'address'=>'required',
            ]
            );
       
       
        //Insert Query--------------------------------------------
        $student = new student;
        $student->fname = $request['fname'];
        $student->lname = $request['lname'];
        $student->email = $request['email'];
        $student->dob = $request['dob'];
        $student->phone = $request['phone'];
        $student->address = $request['address'];
        $student->save();
        return redirect('/');
    }
        
    public function edit($id)
    {

        $student = student::find($id);
        if($student){

            return view('studentUpdate' , compact('student'));
        }
        return redirect('/');
    }

    
    public function update(Request $request, $id)
    {
       $student = student::find($id);
       $student->fname = $request['fname'];
        $student->lname = $request['lname'];
        $student->email = $request['email'];
        $student->dob = $request['dob'];
        $student->phone = $request['phone'];
        $student->address = $request['address'];
        $student->save();
        return redirect('/');
    }

    
    public function destroy($id)
    {
       $student = student::find($id);
       $student->delete();
       return redirect('/');
    }
    
}

