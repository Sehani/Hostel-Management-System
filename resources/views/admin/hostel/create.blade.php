@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Hostel</div>

                <div class="card-body">
                    <form method="post" class="form-horizontal" action="{{url('admin/hostel/save-hostal')}}">
                        @csrf

                        <div class="hr-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hostel Name</label>
                            <div class="col-sm-8">
                                <input type="text" value="" name="hostel_name" class="form-control" required> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">No of Rooms</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="number_of_rooms" id="number_of_rooms" value="" required="required">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">No of Beds</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="number_of_beds" value="" required>
                            </div>
                        </div>



                        <div class="col-sm-8 col-sm-offset-2">

                            <input class="btn btn-primary" type="submit" name="submit" value="Add ">
                        </div>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
