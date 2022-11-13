<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hostel;
use App\Models\Student;
use App\Models\StudentAppeal;
use Auth;
class StudentController extends Controller
{
    //
    public function  index()
    {
        $user= Student::where('email',Auth::user()->email)->first();
        $hostel= Hostel::where('id',$user->hostel_id)->first();
        return view('student.home',compact('hostel','user'));
    }
    public function appeal(Request $request,$id){
        $data = new StudentAppeal();
        $data->student_id=$id;
        $data->reason=$request->reason;
        $data->save();
        return back()->with('success','Success');

    }
    public function allStudent()
    {
        $students = Student::paginate(10);
        return view('student.view_student',compact('students'));
    }
    public function allHostel()
    {
        $hostels = Hostel::paginate(10);
        return view('student.view_hostel',compact('hostels'));
    }
}
