@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Student</div>

                <div class="card-body">
                    <form method="post" class="form-horizontal" action="{{url('admin/student/update-student/'.$student->id)}}">
                        @csrf

                        <div class="hr-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Student Name</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$student->name}}" name="name" class="form-control" required> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hostel Name</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="hostel_id">
                                @foreach($hostels as $key => $hostel)
                                <option value="{{$hostel->id}}" {{$hostel->id == $student->hostel_id ? 'selected' : ''}}>{{$hostel->hostel_name}}</option>
                                    
                                @endforeach
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Year</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="year" value="{{$student->year}}"  required>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="email" value="{{$student->email}}"  required>
                            </div>
                        </div>
                             <div class="form-group">
                            <label class="col-sm-2 control-label">Degree</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="course" value="{{$student->course}}"  required>
                            </div>
                        </div>




                        <div class="col-sm-8 col-sm-offset-2">

                            <input class="btn btn-primary" type="submit" name="submit" value="Update ">
                        </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
