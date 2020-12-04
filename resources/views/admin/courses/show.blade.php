@extends('admin.layouts.header')
@section('page_name')
    Information All Data For Course Student
@endsection
@section('content')
    <div class="row">
    <div class="card text-white bg-success mb-3" style="width: 220px;">
        <div class="card-header bg-success" style="font-size: 12px;">Student Register In Course : {{$studentNumber}}</div>
    </div>
        <div class="card text-white bg-danger mb-3" style="width: 220px;">
            <div class="card-header bg-danger" style="font-size: 12px;">Total Money: {{$studentNumber}}</div>
        </div>
        <div class="card text-white bg-warning mb-3" style="width: 220px;">
            <div class="card-header bg-warning" style="font-size: 12px;">Status Course: {{$studentNumber}}</div>
        </div>
        <div class="card text-white bg-dark mb-3" style="width: 160px;">
            <div class="card-header bg-dark" style="font-size: 12px;">Type Course: Private</div>
        </div>

    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">All Student Register On Course
                <b>{{$courseInfo->name}} </b>  Session  <b>{{$courseInfo->session}}</b></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive table table-striped">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="font-size: 12px;"> Sp Number</th>
                        <th style="font-size: 12px;"> Name</th>
                        <th style="font-size: 12px;">Ar Name</th>
                        <th style="font-size: 12px;">National ID</th>
                        <th style="font-size: 12px;">Phone Number</th>
                        <th style="font-size: 12px;">Second Phone</th>
                        <th style="font-size: 12px;">Before Discount Price</th>
                        <th style="font-size: 12px;">After Discount Price</th>
                        <th style="font-size: 12px;">Payment</th>
                        <th style="font-size: 12px;">All Payment</th>
                    </tr>
                    </thead>
                    <tbody>
                    @for($i=0 ; $i <count($courseStudent) ; $i++)
                        <tr>
                            <td style="font-size: 12px;">{{$courseStudent[$i]->sp_number}}</td>
                            <td style="font-size: 12px;">{{$courseStudent[$i]->name}}</td>
                            <td style="font-size: 12px;">{{$courseStudent[$i]->name_ar}}</td>
                            <td style="font-size: 12px;">{{$courseStudent[$i]->national_id}}</td>
                            <td style="font-size: 12px;">{{$courseStudent[$i]->phone_number}}</td>
                            <td style="font-size: 12px;">{{$courseStudent[$i]->phone_number_second}}</td>
                            <td style="font-size: 12px;">{{$courseInfo->price}}</td>
                            <td style="font-size: 12px;">
                                
                            </td>

                        </tr>
                    @endfor
                    </tbody>

                </table>
                {{$courseStudent->links()}}
            </div>
        </div>
    </div>
@endsection
