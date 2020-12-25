@extends('admin.layouts.header')
@section('page_name')
    Specific Payment Details
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
                        <th style="font-size: 12px;">Student Pay</th>
                        <th style="font-size: 12px;">Received By </th>
                        <th style="font-size: 12px;">Date</th>
                        <th style="font-size: 12px;">Serial</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($payment  as $value)
                        <tr>
                            <td style="font-size: 12px;">{{$value->payment}} JOD</td>
                            <td style="font-size: 12px;">{{$value->received_by}} </td>
                            <td style="font-size: 12px;">{{$value->created_at}}</td>
                            <td style="font-size: 12px;">{{$value->serial}}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>

            </div>
        </div>
    </div>
@endsection
