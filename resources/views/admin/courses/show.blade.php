@extends('admin.layouts.header')
@section('page_name')
    Information All Data For Course Student
@endsection
@section('content')
    <div class="row">
    <div class="card text-white bg-success mb-3" style="width: 235px;">
        <div class="card-header bg-success" style="font-size: 12px;">Student Register In Course : {{$studentNumber}}</div>
    </div>
        <div class="card text-white bg-danger mb-3" style="width: 220px;">
            <div class="card-header bg-danger" style="font-size: 12px;">Total Money: {{$totalPaymentForAll}} JOD</div>
        </div>
        <div class="card text-white bg-warning mb-3" style="width: 220px;">
            <div class="card-header bg-warning" style="font-size: 12px;">Status Course: {{$courseInfo->status}}</div>
        </div>
        <div class="card text-white bg-dark mb-3" style="width: 160px;">
            <div class="card-header bg-dark" style="font-size: 12px;">Type Course: {{$courseInfo->type}}</div>
        </div>
        <div class="card text-white bg-gradient-light mb-3" style="width: 160px;">
            <div class="card-header bg-gradient-success" style="font-size: 12px;">Total Course :
            <?php
                $totalPrice = 0;
            for($i = 0 ; $i < $studentNumber ; $i++){
                $before = ($courseInfo->price * $courseStudent[$i]->discount)/100;
                $after  = $courseInfo->price - $before;
                $totalPrice = $totalPrice + $after;
            }
            ?>{{$totalPrice}}
            </div>
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
                        <th style="font-size: 12px;">Total Payment</th>
                       <th style="font-size: 12px;">Show Payment Details</th>
                        <th style="font-size: 12px;">Add Mark</th>
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

                                @if(!is_null($courseStudent[$i]->discount))
                                   <?php

                                   $after =($courseStudent[$i]->discount * $courseInfo->price)/100 ;
                                   $priceAfter = $courseInfo->price - $after
                                   ?>
                                       <td style="font-size: 12px;">{{$priceAfter}}</td>
                                @else
                                <td style="font-size: 12px;">{{$courseInfo->price}}</td>
                                @endif
                                <td style="font-size: 12px;">{{$amountPayment[$i]}}</td>



                            <td> <a href="{{url('student/'.$courseStudent[$i]->id.'/payment/'.$courseInfo->id.'/details')}}" class="btn btn-danger" style="font-size: 12px;">Show Payments</a> </td>
                            <td> <a href="{{url('add/'.$courseStudent[$i]->id.'/'.$courseInfo->id.'/mark')}}" class="btn btn-primary" style="font-size: 12px;">Add Mark</a> </td>
                        </tr>
                    @endfor
                    </tbody>

                </table>
                {{$courseStudent->links()}}
            </div>
        </div>
    </div>
@endsection
