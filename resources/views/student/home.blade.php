@extends('layouts.student')
@section('content')
<style>
.c {
  padding: 15px;
  margin-top: 30px;
  box-shadow: 0 0 16px 1px rgba(0, 0, 0, 0.1);
}

.c img {
  width: 100%;
  object-fit: cover;
  border-radius: 3px;
  /* background-color: white; */
  box-shadow: 0 3px 20px 11px rgba(0, 0, 0, 0.09);
}

.c .top-sec {
  margin-top: -30px;
  margin-bottom: 15px;
}
</style>

<div class="container" >
    <div class="row justify-content-center mt-4">
        <div class="col-md-12 mt-4">
        <div class="card c">
        <div class="top-sec">
          <img src="{{url('/bg_2.jpg')}}">
        </div>
        <div class="bottom-sec">
         <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                <th style="color:#000000">Name</th>
                                    <th style="color:#000000">Reg No</th>
                                    <th style="color:#000000">Hostel Name</th>
                                    <th style="color:#000000">Room number</th>
                                    <th style="color:#000000">Bed Number</th>
                        

                                    <th style="color:#000000">Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td style="color:#000000">{{$user->name}}</td>
                                    <td style="color:#000000">{{$user->reg_id}}</td>
                                    <td style="color:#000000">{{$hostel->hostel_name}}</td>
                                    <td style="color:#000000">{{$hostel->number_of_rooms}}</td>
                                    <td style="color:#000000">{{$hostel->number_of_beds}}</td>
                        
                                    <td style="color:#000000">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                                            Appeal Change Hostel
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Appeal Change Hostel</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{url('/student/appeal/'.$user->id)}}" method="POST">
                                                    @csrf
                                                        <div class="modal-body">
                                                        <label>Reason*</label>
                                                        <textarea name="reason" class="form-control" required></textarea>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Appeal</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>



                            </tbody>
                        </table>

        </div>
      </div>
          
    </div>
</div>


@endsection
