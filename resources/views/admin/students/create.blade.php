@extends('admin.layouts.header')
@section('page_name')
Register New Student
@endsection

@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Register New Student</h6>
        </div>
        <div class="card-body">
            <form>
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="std_name" required placeholder="Enter FullName">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Arabic Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="std_name_ar"  required placeholder="Enter Arabic Name">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="std_email"  placeholder="Enter email address" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">National Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="std_national_id"
                                       placeholder="Enter National ID" required>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Student Special Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="std_sp_number" readonly value="{{$std_sp_number}}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Student Phone Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="std_phone_number" required >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Student Second Phone Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="std_phone_number_second" required >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-file">Student Photo: <span class="tx-danger">*</span></label>
                                <input class="form-control-file" type="file" name="std_phone_number_second" required >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-file">Student Discount: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="number" name="std_discount" min="0" required placeholder="Discount">
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
