@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View Students</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                               		<th>No</th>
											<th>Student Name</th>
											<th>Hostel Name</th>
											<th>Year</th>
											<th>Email</th>
											<th>Degree</th>									
											<th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($students as $key => $student)
                            @php
                                $hostel = App\Models\Hostel::where('id',$student->hostel_id)->first();
                            @endphp
                            <tr>
                            <td>{{$student->reg_id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$hostel->hostel_name}}</td>
                            <td>{{$student->year}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->course}}</td>
                         
                            <td><a href="{{url('/admin/student/edit-student/'.$student->id)}}" class="btn btn-xs btn-success">Edit</a> </td>
                            </tr>
                                
                            @endforeach

                            </tbody>
                        </table>
                        {{ $students->links("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
