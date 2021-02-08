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
                                <label class="form-control-label" >Full Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name" 
                                       placeholder="Enter FullName">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" >Arabic Name: <span class="tx-danger">*</span></label>
                                <input class="form-control"  type="text" name="name_ar"
                                        placeholder="Enter Arabic Name">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group" >
                                <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="email"
                                       placeholder="Enter email address" >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label" >National Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="national_id"
                                       placeholder="Enter National ID"  >
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label" >Student Special Number: <span class="tx-danger">*</span></label>
                                <input class="form-control"  
                                       type="text" name="sp_number" readonly value="{{$std_sp_number}}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label" >Student Phone Number: <span class="tx-danger">*</span></label>
                                <input class="form-control"  type="text" name="phone_number"  >
                            </div>
                        </div><!-- col-4 -->

                      

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label" >Student Second Phone Number: <span class="tx-danger">*</span></label>
                                <input class="form-control"  type="text" name="phone_number_second" required >
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label" >Living address: <span class="tx-danger">*</span></label>
                                <input class="form-control" 
                                 type="text" name="living"  >
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-file">Student Photo: <span class="tx-danger">*</span></label>
                                <input class="form-control-file"  type="file" name="photo">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-file" >ID or Passport Photo: <span class="tx-danger">*</span></label>
                                <input class="form-control-file"  type="file" name="photo_pass">
                            </div>
                        </div><!-- col-4 -->


                      <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-file" >Not Jordanian <span class="tx-danger">*</span></label>
                                <input class="custom-checkbox"  type="checkbox"
                                       name="notJordan" value="1">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-file" >Gender <span class="tx-danger">*</span></label>
                                <select class="form-control"
                                         name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- row -->
                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5" >Register</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
            </div><!-- card -->
        </div>







@endsection
