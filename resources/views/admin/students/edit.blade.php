@extends('admin.layouts.header')
@section('page_name')
    Edit Student Information
@endsection
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Register New Student</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('/student/'.$student->id.'/update')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" required value="{{$student->name}}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Arabic Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name_ar"  required value="{{$student->name_ar}}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="email" value="{{$student->email}}" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">National Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="national_id"
                                      value="{{$student->national_id}}" required>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Student Special Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="sp_number" readonly value="{{$student->sp_number}}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Student Phone Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" value="{{$student->phone_number}}" name="phone_number" required >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Student Second Phone Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" value="{{$student->phone_number_second}}" name="phone_number_second" required >
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Register</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>
@endsection
