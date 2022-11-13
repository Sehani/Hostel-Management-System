<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hostel;
use App\Models\Student;
class DashBoardController extends Controller
{
    //
    public function index(){
        $hostels = Hostel::count();
        $students = Student::count();
        return view('admin.dashboard.index',compact('students','hostels'));
    }
}
