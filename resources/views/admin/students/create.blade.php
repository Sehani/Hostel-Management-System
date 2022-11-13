@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Student registration</div>

                <div class="card-body">
                    <form method="post" class="form-horizontal" action="{{url('admin/student/save-student')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="hr-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Import File</label>
                            <div class="col-sm-8">
                                <input type="file" name="student_data" class="form-control" required> </div>
                        </div>
        



                        <div class="col-sm-8 col-sm-offset-2">

                            <input class="btn btn-primary" type="submit" name="submit" value="Import ">
                        </div>
                        
                    
                </div>

                </form>
                    <!-- <div class="col-sm-4">

                            <a href="{{URL::to('/').'/Details.csv'}}" class="btn btn-info">Download Sample</a>
                        </div> -->
            </div>
        </div>
    </div>
</div>
</div>
@endsection
