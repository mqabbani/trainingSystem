@extends('admin.layouts.header')
@section('page_name')
    Add Payment For Course`s
@endsection
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Payment</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('/add/payment')}}">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-1" hidden>
                            <div class="form-group">
                                <input class="form-control" name="std_id" value="{{$student->id}}" hidden readonly required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label >Student Name : <span class="tx-danger">*</span></label>
                                <input class="form-control" name="std_name" value="{{$student->name}}" readonly required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label >Course Name : <span class="tx-danger">*</span></label>
                                <input class="form-control" name="course_name" value="{{$course->name}}" readonly required>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-2">
                            <div class="form-group">
                                <label >Session : <span class="tx-danger">*</span></label>
                                <input class="form-control" name="course_session" value="{{$course->session}}" readonly required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label >Payment : <span class="tx-danger">*</span></label>
                                <input class="form-control" name="payment" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label >Payment Method: <span class="tx-danger">*</span></label>
                                <select class="form-control" name="payment_method" required>
                                    <option value="Cash">Cash</option>
                                    <option value="Visa">Visa</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label >Received By: <span class="tx-danger">*</span></label>
                                <input class="form-control" name="receivedby" type="text" required placeholder="Received By">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label >Sum of: <span class="tx-danger">*</span></label>
                                <input class="form-control" name="sum_of" type="text" required placeholder="خمسون دينار فقط" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label  style="color: red;"><b>Send SMS </b><span class="tx-danger">*:</span></label>
                                <input class="form-check-label" name="sendSms" value="on" type="checkbox">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-3">
                            <div class="form-group">
                                <button class="btn btn-info mg-r-5" style="margin-top: 30px;">Add Payment</button>
                            </div>
                        </div><!-- col-4 -->

                    </div><!-- row -->

                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>

@endsection
