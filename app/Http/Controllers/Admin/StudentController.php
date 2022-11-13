<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hostel;
use App\Models\Student;
use App\Models\StudentAppeal;
class StudentController extends Controller
{
    //
    public function  index()
    {
        return view('admin.students.create');
    }
    public function create(Request $request){
        if (request()->student_data){
            if(request()->student_data->getClientOriginalExtension() == 'csv' ) {
            $student_data = time().'.'.request()->student_data->getClientOriginalExtension();
        
            request()->student_data->move(public_path('students'), $student_data);

            $path = public_path('students/'.$student_data);
            $rows = array_map('str_getcsv',file($path));
            foreach (array_slice($rows,1) as $row){
               
                    $reg_id =$row[0];
                    $name =$row[1];
                    $year =$row[2];
                    $email =$row[3];
                    $course =$row[4];

                    $hostal = Hostel::where('available_beds','!=',0)->inRandomOrder()->first();
                    if($hostal ==  null){
                        return back()->with('error','Some data not saved. Hostel Unavailable!');
                    }
                    $available_beds=(int)$hostal->available_beds - 1;
                    $available_rooms =(int)$available_beds /(int)$hostal->number_of_beds;
                    $available_rooms=ceil($available_rooms);
                    $hostal_id = $hostal->id;
                    $hostal->available_beds = (int)$hostal->available_beds - 1;
                    $hostal->available_rooms =$available_rooms;
                    $hostal->save();

                    $student = new Student();
                    $student->reg_id=$reg_id;
                    $student->name=$name;
                    $student->year=$year;
                    $student->email=$email;
                    $student->course=$course;
                    $student->hostel_id=$hostal_id;
                    $student->save();


                    

              
            }
            return back()->with('success','Student Registered');
            }else{
                return back()->with('error','Invalid file format');
            }
        }

    }
    public function viewData()
    {
        $students = Student::paginate(10);
        return view('admin.students.view_student',compact('students'));
    }
    public function editData($id)
    {
        $hostels = Hostel::all();
        $student = Student::find($id);
        return view('admin.students.edit_student',compact('student','hostels'));
    }
    public function updateData($id,Request $request)
    {
       
        $student = Student::find($id);
        $old_hostel=Hostel::where('id','=',$student->hostel_id)->first();
        $old_available_beds=(int)$old_hostel->available_beds + 1;
        $old_available_rooms =(int)$old_available_beds /(int)$old_hostel->number_of_beds;
        $old_available_rooms=ceil($old_available_rooms);
        $old_hostel->available_beds= (int)$old_hostel->available_beds + 1;
        $old_hostel->available_rooms= (int)$old_available_rooms;
        $old_hostel->save();
        $new_hostel=Hostel::where('id','=',$request->hostel_id)->first();
        $new_available_beds=(int)$new_hostel->available_beds - 1;
        $new_available_rooms =(int)$new_available_beds /(int)$new_hostel->number_of_beds;
        $new_available_rooms=ceil($new_available_rooms);
        $new_hostel->available_beds= (int)$new_hostel->available_beds - 1;
        $new_hostel->available_rooms= (int)$new_available_rooms;
        $new_hostel->save();
        $student->name=$request->name;
        $student->year=$request->year;
        $student->email=$request->email;
        $student->course=$request->course;
        $student->hostel_id=$request->hostel_id;
        $student->save();

        return back()->with('success','Student Updated');

    }
    public function appeal()
    {
        $appeals = StudentAppeal::where('status',0)->get();
        return view('admin.students.appeals',compact('appeals'));
    }
    public function appealReject($id)
    {
     StudentAppeal::where('id',$id)->update(['status'=>1]);
     return back()->with('success','Appeal Rejected');
    }
    public function appealConfirm($id)
    {
     StudentAppeal::where('id',$id)->update(['status'=>2]);
     return back()->with('success','Appeal Approved');
    }
}
