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
                    <th scope="col" style="font-size: 12px;">Price Before Discount</th>
                    <th scope="col" style="font-size: 12px;">After Discount Price</th>
                    <th scope="col" style="font-size: 12px;">Payments</th>
                    <th scope="col" style="font-size: 12px;">Action</th>
                </tr>
                </thead>
                <tbody>
                       @for($i=0 ; $i< count($student) ;$i++)
                           <tr>
                               <td style="font-size: 12px;">{{$student[$i]->name}}</td>
                               <td style="font-size: 12px;">{{$student[$i]->session}}</td>
                               <td style="font-size: 12px;">{{$student[$i]->start_time}}</td>
                               <td style="font-size: 12px;">{{$student[$i]->end_time}}</td>
                               <td style="font-size: 12px;">{{$student[$i]->start_date}}</td>
                               <td style="font-size: 12px;">{{$student[$i]->end_date}}</td>
                               <td style="font-size: 12px;">{{$student[$i]->status}}</td>
                               <td style="font-size: 12px;">{{$student[$i]->type}}</td>
                               <td style="font-size: 12px;">{{$student[$i]->days}}</td>
                               <td style="font-size: 13px;">{{$student[$i]->price}}</td>
                               @if(is_null($stdData->discount)){<td>{{$student[$i]->price}}</td>}
                               @else

                               <?php
                                   $discountPrice = $student[$i]->price * $stdData->discount /100;
                                   $afterDiscount = $student[$i]->price - $discountPrice;
                                 ?>
                                   <td style="font-size: 13px;">{{$afterDiscount}}</td>
                               @endif

                               <td style="font-size: 13px;">{{$amountPayment[$i]}}</td>
                               <td><a href="{{url('/add/'.$stdData->id.'/'.$student[$i]->id.'/payment')}}" style="font-size: 12px;" class="btn btn-danger">Add Payment</a> </td>
                           </tr>
                       @endfor



                </tbody>
            </table>
        </div> <!-- Col-lg4 !-->
    </div>




@endsection
