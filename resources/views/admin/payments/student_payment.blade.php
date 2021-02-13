@extends('admin.layouts.header')
@section('page_name')
    Student Info For Payment
@endsection
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Payment`s Details
                <b></b></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive table table-striped">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="font-size: 12px;">Course Name</th>
                        <th style="font-size: 12px;">Payments</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courseInfo as $course)
                        <tr tyle="font-size: 12px;">
                            <td>{{$course->name}}</td>
                            <td><a class="btn btn-danger" href="{{url('student/'.$student->id.'/payment/'.$course->id.'/details')}}">Show Payments</a> </td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
@endsection
