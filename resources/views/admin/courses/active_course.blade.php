@extends('admin.layouts.header')
@section('page_name')
    Active Courses
@endsection
@section('content')
 <!-- DataTales Example -->
 <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Courses Details</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive table table-striped">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="font-size: 12px;">#</th>
                        <th style="font-size: 12px;">Course Name</th>
                        <th style="font-size: 12px;">Course Session</th>
                        <th style="font-size: 12px;">Course Start Time</th>
                        <th style="font-size: 12px;"> Course End Time</th>
                        <th style="font-size: 12px; "> Course Start Date</th>
                        <th style="font-size: 12px; "> Course End Date</th>
                        <th style="font-size: 12px; ">Course Status</th>
                        <th style="font-size: 12px; ">Course Type</th>
                        <th style="font-size: 12px; ">Course Days</th>
                        <th style="font-size: 12px; ">Edit</th>
                        <th style="font-size: 12px; ">More Details</th>
                        <th style="font-size: 12px; ">Download</th>

                    </tr>
                    </thead>

                    <tbody>
                    @foreach($status as $course)
                        <tr>
                            <td style="font-size: 12px;">{{$loop->index}}</td>
                            <td style="font-size: 12px;">{{$course->name}}</td>
                            <td style="font-size: 12px;">{{$course->session}}</td>
                            <td style="font-size: 12px;">{{$course->start_time}}</td>
                            <td style="font-size: 12px;">{{$course->end_time}}</td>
                            <td style="font-size: 12px;">{{$course->start_date}}</td>
                            <td style="font-size: 12px;">{{$course->end_date}}</td>
                            <td style="font-size: 12px;">{{$course->status}}</td>
                            @if($course->type == 'Public')
                            <td style="font-size: 12px;color: green">{{$course->type}}</td>
                            @else
                                <td style="font-size: 12px;color: red">{{$course->type}}</td>
                            @endif
                            <td style="font-size: 12px;">{{$course->days}}</td>
                            <td style="font-size: 12px;"><a href="{{url('/course/'.$course->id.'/edit')}}" style="font-size: 12px;" class="btn btn-primary">Edit</a> </td>
                            <td style="font-size: 12px;"><a href="{{url('show/'.$course->id.'/course')}}" style="font-size: 12px;" class="btn btn-light">More</a> </td>
                            <td style="font-size: 12px;font-family: "><a href="{{url('/donwload/'.$course->id)}}" style="font-size: 12px;" class="btn btn-light">Download</a> </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$status->links()}}
            </div>
        </div>
    </div>
@endsection
