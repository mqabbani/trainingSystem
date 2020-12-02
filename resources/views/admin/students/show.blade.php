@extends('admin.layouts.header')
@section('page_name')
    Show Student Details and Course`s Related
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-3">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">Student Information </h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" style="font-size: 14px;">Name :{{$stdData->name}}</li>
                    <li class="list-group-item" style="font-size: 14px;">Arabic Name : {{$stdData->name_ar}}</li>
                    <li class="list-group-item" style="font-size: 14px;">National ID : {{$stdData->national_id}}</li>
                    <li class="list-group-item" style="color: red; font-size: 14px;">SP Number : {{$stdData->sp_number}}</li>
                    <li class="list-group-item" style="font-size: 14px;">Phone Number : {{$stdData->phone_number}}</li>
                    <li class="list-group-item" style="font-size: 14px;">Phone Number : {{$stdData->phone_number_second}}</li>
                    <li class="list-group-item" style="font-size: 14px;">Discount : {{$stdData->discount}}</li>
                </ul>
                <div class="card-body">
                    <a href="{{url('/student/'.$stdData->id.'/edit')}}" class="card-link">Edit Student Info</a>
                </div>
            </div>
        </div> <!-- Col-lg4 !-->

        <div class="col-lg-9">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Session</th>
                    <th scope="col">Start time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Type</th>
                    <th scope="col">Days</th>
                    <th scope="col">Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach($student as $std)
                <tr>
                    <td>{{$std->name}}</td>
                    <td>{{$std->session}}</td>
                    <td>{{$std->start_time}}</td>
                    <td>{{$std->end_time}}</td>
                    <td>{{$std->start_date}}</td>
                    <td>{{$std->end_date}}</td>
                    <td>{{$std->status}}</td>
                    <td>{{$std->type}}</td>
                    <td>{{$std->days}}</td>
                    <td>{{$std->price}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div> <!-- Col-lg4 !-->
    </div>




@endsection
