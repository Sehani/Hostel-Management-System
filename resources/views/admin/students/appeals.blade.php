@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View Appeals</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                              
											<th>Student Name</th>
											<th>Reason</th>							
											<th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($appeals as $key => $appeal)
                            @php
                                $student = App\Models\Student::where('id',$appeal->student_id)->first();
                            @endphp
                            <tr>
                    
                            <td>{{$student->name}}</td>
                            <td>{{$appeal->reason}}</td>
                     
                         
                            <td><a href="{{url('/admin/student/appeal-confirm/'.$appeal->id)}}" class="btn btn-xs btn-success">Confirm</a><a href="{{url('/admin/student/appeal-reject/'.$appeal->id)}}" class="btn btn-xs btn-danger">Reject</a>  </td>
                            </tr>
                                
                            @endforeach

                            </tbody>
                        </table>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
