@extends('admin.layouts.header')
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create New Course</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('/save/new/course')}}">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label >Choose Name: <span class="tx-danger">*</span></label>
                                <select class="form-control" name="course_name" id="course_name">
                                    <option></option>
                                    <option value="Hardware">Hardware</option>
                                    <option value="Software">Software</option>
                                    <option value="Glass">Glass</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Course Session: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="course_se" id="course_session" readonly/>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Course Price: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="course_price"  placeholder="Enter Price" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Start Course time: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="time" name="course_start_time"
                                       placeholder="Enter National ID" required>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">End Course time: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="time" name="course_end_time"
                                       placeholder="Enter National ID" required>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Course Status: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="course_status"
                                       placeholder="Pending" required readonly value="Pending">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Course Type: <span class="tx-danger">*</span></label>
                               <select name="course_type" class="form-control">
                                   <option value="Public">Public</option>
                                   <option value="Private">Private</option>
                               </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Day`s :</label>
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <input class="form-check-label" type="checkbox" value="Saturday" id="defaultCheck1" name="ch1[]"> Saturday
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <input class="form-check-label" type="checkbox" value="SunDay" id="defaultCheck2" name="ch1[]"> Sunday
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <input class="form-check-input" type="checkbox" value="Monday" id="defaultCheck3" name="ch1[]">Monday
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <input class="form-check-input" type="checkbox" value="Tuesday" id="defaultCheck4" name="ch1[]">Tuesday
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <input class="form-check-input" type="checkbox" value="Wednesday" id="defaultCheck5" name="ch1[]">Wednesday
                                &nbsp;&nbsp;     &nbsp;&nbsp; &nbsp;&nbsp;
                                <input class="form-check-input" type="checkbox" value="Thursday" id="defaultCheck6" name="ch1[]">Thursday
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->
                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Create</button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>

@endsection


