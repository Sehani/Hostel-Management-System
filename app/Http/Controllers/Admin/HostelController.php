<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hostel;

class HostelController extends Controller
{
    //
    public function  index()
    {
        return view('admin.hostel.create');
    }
    public function create(Request $request)
    {
        $data = new Hostel();
        $data->hostel_name= $request->hostel_name;
        $data->number_of_rooms= $request->number_of_rooms;
        $data->number_of_beds= $request->number_of_beds;
        $data->available_rooms= $request->number_of_rooms;
        $data->available_beds= (int)$request->number_of_beds*(int)$request->number_of_rooms;
        $data->save();
        return back()->with('success','Hostel Created');

    }
    public function  viewData()
    {
        $hostels = Hostel::paginate(10);
        return view('admin.hostel.view_hostel',compact('hostels'));
    }
    public function editData($id)
    {
        $hostel = Hostel::find($id);
        return view('admin.hostel.edit_hostel',compact('hostel'));
    }
    public function updateData($id,Request $request)
    {
        $data = Hostel::find($id);
        $data->hostel_name= $request->hostel_name;
        $data->number_of_rooms= $request->number_of_rooms;
        $data->number_of_beds= $request->number_of_beds;
        $data->save();
        return back()->with('success','Hostel Updated');

    }
}
