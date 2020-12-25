@extends('admin.layouts.header')
@section('page_name')
Register New Student
@endsection

@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Step One : Register New Student</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('/store/student')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" style="font-family: cursive;">Full Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" style="font-family: cursive;" required placeholder="Enter FullName">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" style="font-family: cursive;">Arabic Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" style="font-family: cursive;" type="text" name="name_ar"  required placeholder="Enter Arabic Name">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group" >
                                <label class="form-control-label" style="font-family: cursive;">Email address: <span class="tx-danger">*</span></label>
                                <input class="form-control" style="font-family: cursive;" type="text" name="email"  placeholder="Enter email address" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label" style="font-family: cursive;">National Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="national_id"
                                       placeholder="Enter National ID" style="font-family: cursive;" required>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label" style="font-family: cursive;">Student Special Number: <span class="tx-danger">*</span></label>
                                <input class="form-control"  style="font-family: cursive;" type="text" name="sp_number" readonly value="{{$std_sp_number}}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label" style="font-family: cursive;">Student Phone Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" style="font-family: cursive;" type="text" name="phone_number" required >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label" style="font-family: cursive;" >Student Second Phone Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" style="font-family: cursive;" type="text" name="phone_number_second" required >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-file" style="font-family: cursive;">Student Photo: <span class="tx-danger">*</span></label>
                                <input class="form-control-file" style="font-family: cursive;" type="file" name="photo" required  >
                            </div>
                        </div><!-- col-4 -->
                      <!--  <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-file" style="font-family: cursive;">Student Discount: <span class="tx-danger">*</span></label>
                                <input class="form-control" style="font-family: cursive;" type="text" name="discount"   placeholder="Discount">
                            </div>
                        </div>-->
                    </div><!-- row -->

                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5" style="font-family: cursive;">Register</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
            </div><!-- card -->
        </div>







@endsection
