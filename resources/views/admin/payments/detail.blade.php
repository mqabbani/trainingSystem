@extends('admin.layouts.header')
@section('page_name')
    All Payment
@endsection
@section('content')
<div class="row">
    <div class="card text-white bg-danger mb-3" style="width: 330px;">
        <div class="card-header bg-danger">{{$student->name}}</div>
    </div>
    <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
        <div class="card-header bg-warning">Sp Number :{{$student->sp_number}}</div>
    </div>
    <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header bg-success">Course :{{$course->name}}</div>
    </div>
    <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-header bg-dark"> Session :{{$course->session}}</div>
    </div>
    <div class="card text-white bg-gradient-light- mb-3" style="max-width: 18rem;">
        <div class="card-header bg-gradient-info">Received Until Now {{$total}} JOD</div>
    </div>
    <div class="card text-white bg-gradient-danger mb-3" style="max-width: 20rem;">
        <div class="card-header bg-gradient-danger">Price : {{$totalCourse[0]}} JOD</div>
    </div>

</div>
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
                    <th style="font-size: 12px;">Student Pay</th>
                    <th style="font-size: 12px;">Received By </th>
                    <th style="font-size: 12px;">Date</th>
                    <th style="font-size: 12px;">Serial</th>
                    <th style="font-size: 12px;">Edit</th>
                    <th style="font-size: 12px;">Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payment as $value)
                    <tr>
                        <td style="font-size: 12px;">{{$value->payment}} JOD</td>
                        <td style="font-size: 12px;">{{$value->received_by}} </td>
                        <td style="font-size: 12px;">{{$value->created_at}}</td>
                        <td style="font-size: 12px;">{{$value->serial}}</td>
                        <td style="font-size: 12px;"><a href="{{url('payment/'.$value->id.'/student/'.$value->student_id.'/course/'.$value->course_id)}}" class="btn btn-primary">Edit</a> </td>
                        <td style="font-size: 12px;"><a href="{{url('delete/payment/'.$value->id)}}" class="btn btn-danger">Delete</a> </td>
                    </tr>
                @endforeach
                </tbody>

            </table>

        </div>
    </div>
</div>
@endsection
