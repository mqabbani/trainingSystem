@extends('admin.layouts.header')
@section('page_name')
    All Show Course
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
                        <th style="font-size: 12px; font-family: cursive">#</th>
                        <th style="font-size: 12px; font-family: cursive">Course Name</th>
                        <th style="font-size: 12px; font-family: cursive">Course Session</th>
                        <th style="font-size: 12px; font-family: cursive">Course Start Time</th>
                        <th style="font-size: 12px; font-family: cursive"> Course End Time</th>
                        <th style="font-size: 12px; font-family: cursive"> Course Start Date</th>
                        <th style="font-size: 12px; font-family: cursive"> Course End Date</th>
                        <th style="font-size: 12px; font-family: cursive"> Course Price</th>
                        <th style="font-size: 12px; font-family: cursive">Course Status</th>
                        <th style="font-size: 12px; font-family: cursive">Course Type</th>
                        <th style="font-size: 12px; font-family: cursive">Course Days</th>
                        <th style="font-size: 12px; font-family: cursive">Edit</th>
                        <th style="font-size: 12px; font-family: cursive">Delete</th>
                        <th style="font-size: 12px; font-family: cursive">More Details</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($allCourses as $course)
                        <tr>
                            <td style="font-size: 12px;font-family: cursive">{{$loop->index}}</td>
                            <td style="font-size: 12px;font-family: cursive">{{$course->name}}</td>
                            <td style="font-size: 12px;font-family: cursive">{{$course->session}}</td>
                            <td style="font-size: 12px;font-family: cursive">{{$course->start_time}}</td>
                            <td style="font-size: 12px;font-family: cursive">{{$course->end_time}}</td>
                            <td style="font-size: 12px;font-family: cursive">{{$course->start_date}}</td>
                            <td style="font-size: 12px;font-family: cursive">{{$course->end_date}}</td>
                            <td style="font-size: 12px;font-family: cursive">{{$course->price}}</td>
                            <td style="font-size: 12px;font-family: cursive">{{$course->status}}</td>
                            <td style="font-size: 12px;font-family: cursive">{{$course->type}}</td>
                            <td style="font-size: 12px;font-family: cursive">{{$course->days}}</td>
                            <td style="font-size: 12px;font-family: cursive"><a href="{{url('/course/'.$course->id.'/edit')}}" style="font-size: 12px;" class="btn btn-primary">Edit</a> </td>
                            <td style="font-size: 12px;font-family: cursive"><a style="font-size: 12px;" href="" class="btn btn-danger">Delete</a> </td>
                            <td style="font-size: 12px;font-family: cursive"><a href="{{url('show/'.$course->id.'/course')}}" style="font-size: 12px;" class="btn btn-light">More</a> </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$allCourses->links()}}
            </div>
        </div>
    </div>
@endsection
