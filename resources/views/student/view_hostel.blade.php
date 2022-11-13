@extends('layouts.student')
@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View Hostel</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Hostel Name</th>
                                    <th>Total Room</th>
                                    <th>Total Bed</th>
                                    <th>Avaible Room No</th>
                                    <th>No of Beds</th>

                                
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($hostels as $key => $hostel)
                            <tr>
                            <td>{{$hostel->id}}</td>
                            <td>{{$hostel->hostel_name}}</td>
                            <td>{{$hostel->number_of_rooms}}</td>
                            <td>{{$hostel->number_of_beds}}</td>
                            <td>{{$hostel->available_rooms}}</td>
                            <td>{{$hostel->available_beds}}</td>
                            </tr>
                                
                            @endforeach

                            </tbody>
                        </table>
                        {{ $hostels->links("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
