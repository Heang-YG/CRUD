<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;

class StudentController extends Controller
{
    public function index(){
        $data = Student::all();
        return view('student.layout',compact('data'));
    }

    public function addstudent(){
        return view('student.add');
    }
    public function savestudent(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required | email',
            'phone'=> 'required',
            'address'=> 'required',
        ]);
        $name = $request ->name;
        $email = $request ->email;
        $phone = $request ->phone;
        $address = $request ->address;

        $stu = new Student();

        $stu->name = $name;
        $stu->email = $email;
        $stu->phone = $phone;
        $stu->address = $address;
        $stu->save();
        return redirect('student');
    }

    public function updatestudent($id){
        $data = Student::where('id','=',$id)->first();
        return view('student.update',compact('data'));
    }
    public function saveupdate(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required | email',
            'phone'=> 'required',
            'address'=> 'required',
        ]);
        $id = $request->id;
        $name = $request ->name;
        $email = $request ->email;
        $phone = $request ->phone;
        $address = $request ->address;

        Student::where('id','=',$id)->update([
            'name'=> $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address
        ]);
        return  redirect()->route('list.students');
    }

    public function destroy(string $id)
    {
        Student::where('id', $id)->delete();
        return redirect('student');
    }

}
