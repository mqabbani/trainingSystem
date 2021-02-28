@extends('admin.layouts.header')
@section('page_name')
Show Student Details and Course`s Related
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
    <table class="table table-striped table-responsive-lg">
                <thead>
                    <tr>
                        <th scope="col" style="font-size: 12px;">Name English</th>
                        <th scope="col" style="font-size: 12px;">Name Arabic</th>
                        <th scope="col" style="font-size: 12px;">Phone Number</th>
                        <th scope="col" style="font-size: 12px;">Second Number</th>
                        <th scope="col" style="font-size: 12px;">Sp Number</th>
                        <th scope="col" style="font-size: 12px;">National ID</th>
                        <th scope="col" style="font-size: 12px;">Edit Data</th>
                        <th scope="col" style="font-size: 12px;">Register New Course</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td style="font-size: 12px;" >{{$stdData->name}}</td>
                        <td style="font-size: 12px;">{{$stdData->name_ar}}</td>
                        <td style="font-size: 12px;">{{$stdData->phone_number}}</td>
                        <td style="font-size: 12px;"> {{$stdData->phone_number_second}}</td>
                        <td style="font-size: 12px;">{{$stdData->sp_number}}</td>
                        <td style="font-size: 12px;">{{$stdData->national_id}}</td>
                        <td style="font-size: 12px;"><a class="btn btn-success" href="{{url('/student/'.$stdData->id.'/edit')}}"  style="font-size: 12px;" >Edit Data</a></td>
                        <td style="font-size: 12px;"><a class="btn btn-danger" href="{{url('/register/student/course')}}"  style="font-size: 12px;" >Register On
                    Course New Course</a></td>
                    </tr>
                </tbody>
            </table>
            
    </div> <!-- Col-lg4 !-->

    <div class="col-lg-12">
        <table class="table table-striped table-responsive-lg">
            <thead>
                <tr>
                    <th scope="col" style="font-size: 12px;">Name</th>
                    <th scope="col" style="font-size: 12px;">Session</th>
                    <th scope="col" style="font-size: 12px;">Start time</th>
                    <th scope="col" style="font-size: 12px;">End Time</th>
                    <th scope="col" style="font-size: 12px;">Start Date</th>
                    <th scope="col" style="font-size: 12px;">End Date</th>
                    <th scope="col" style="font-size: 12px;">Status</th>
                    <th scope="col" style="font-size: 12px;">Type</th>
                    <th scope="col" style="font-size: 12px;">Days</th>
                    <th scope="col" style="font-size: 12px;">Price</th>
                    <th scope="col" style="font-size: 12px;">Payments</th>
                    <th scope="col" style="font-size: 12px;">Show Payment</th>
                    <th scope="col" style="font-size: 12px;">Add Payment</th>
                    <th scope="col" style="font-size: 12px;">Edit Price</th>
                    <th scope="col" style="font-size: 12px;">Add Mark</th>
                    <th scope="col" style="font-size: 12px;">Contract</th>
                    <th scope="col" style="font-size: 12px;">Delete</th>
                </tr>
            </thead>
            <tbody>
                @for($i=0 ; $i< count($student) ;$i++) <tr>
                    <td style="font-size: 12px;">{{$student[$i]->name}}</td>
                    <td style="font-size: 12px;">{{$student[$i]->session}}</td>
                    <td style="font-size: 12px;">{{$student[$i]->start_time}}</td>
                    <td style="font-size: 12px;">{{$student[$i]->end_time}}</td>
                    <td style="font-size: 12px;">{{$student[$i]->start_date}}</td>
                    <td style="font-size: 12px;">{{$student[$i]->end_date}}</td>
                    <td style="font-size: 12px;">{{$student[$i]->status}}</td>
                    <td style="font-size: 12px;">{{$student[$i]->type}}</td>
                    <td style="font-size: 12px;">{{$student[$i]->days}}</td>
                    <td style="font-size: 12px;">{{$price[$i]}}</td>
                    <td style="font-size: 12px;">{{$amountPayment[$i]}}</td>
                    <td><a href="{{url('student/'.$stdData->id.'/payment/'.$student[$i]->id.'/details')}}"
                            style="font-size: 12px;" class="btn btn-success">Show Payment</a> </td>
                    <td><a href="{{url('/add/'.$stdData->id.'/'.$student[$i]->id.'/payment')}}" style="font-size: 12px;"
                            class="btn btn-danger">Add Payment</a> </td>
                    <td><a href="{{url('/edit/'.$stdData->id.'/'.$student[$i]->id.'/course/price')}}"
                            style="font-size: 12px;" class="btn btn-warning">Edit Price</a> </td>
                    <td><a href="{{url('/add/'.$stdData->id.'/'.$student[$i]->id.'/mark')}}" style="font-size: 12px;"
                            class="btn btn-primary">Add Mark</a> </td>
                    <td><a href="{{url('print/'.$stdData->id.'/contract')}}" style="font-size: 12px;"
                            class="btn btn-info">Contract</a> </td>
                    <td><a href="{{url('delete/'.$stdData->id.'/student/course/'.$student[$i]->id)}}"
                            style="font-size: 12px;" class="btn btn-outline-info">Delete</a> </td>

                    </tr>
                    @endfor



            </tbody>
        </table>
    </div> <!-- Col-lg4 !-->
</div>




@endsection