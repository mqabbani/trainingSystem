@extends('admin.layouts.header')
@section('page_name')
    Edit Course Information
@endsection
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
                                <input class="form-control" name="name" value="{{$course->name}}" readonly>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Course Session: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="session1" value="{{$course->session}}" readonly/>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Course Price: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="price"  value="{{$course->price}}" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Start Course time: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="time" name="start_time"
                                       value="{{$course->start_time}}" required>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">End Course time: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="time" name="end_time"
                                       value="{{$course->end_time}}" required>
                            </div>
                        </div><!-- col-8 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Course Status: <span class="tx-danger">*</span></label>
                                <select class="form-control" type="text" name="status">
                                    <option @if($course->status == 'Pending'){ selected} @endif value="Pending">Pending</option>
                                    <option @if($course->status == 'Active'){ selected} @endif value="Active">Active</option>
                                    <option @if($course->status == 'Finished'){ selected} @endif value="Finished">Finished</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Course Type: <span class="tx-danger">*</span></label>
                                <select name="type" class="form-control">
                                    <option value="Public" @if($course->type == 'Public'){ selected} @endif>Public</option>
                                    <option value="Private" @if($course->status == 'Private'){ selected} @endif>Private</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-12">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Day`s :</label>
                                &nbsp;&nbsp; &nbsp;&nbsp; <?php
                                $days = $course->days;
                                $day = explode("-",$days);
                                count($day);

                                ?>
                                <input class="form-check-label" type="checkbox" value="Saturday" id="defaultCheck1" name="ch1[]"
                                       <?php if(isset($day[0])=='Saturday'){ echo 'checked';}?>> Saturday
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <input class="form-check-label" type="checkbox" value="SunDay" id="defaultCheck2" name="ch1[]"
                                     <?php if(isset($day[1]) == 'Sunday'){ echo 'checked';} ?> > Sunday
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <input class="form-check-input" type="checkbox" value="Monday" id="defaultCheck3" name="ch1[]"
                                       <?php if(isset($day[2]) == 'Monday') { echo 'checked';}?>>Monday
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <input class="form-check-input" type="checkbox" value="Tuesday" id="defaultCheck4" name="ch1[]"
                                <?php if(isset($day[3]) == 'Tuesday') { echo checked;}?>>Tuesday
                                &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                <input class="form-check-input" type="checkbox" value="Wednesday" id="defaultCheck5" name="ch1[]"
                                <?php if(isset($day[4]) == 'Wednesday') { echo 'checked';}?>  >Wednesday
                                &nbsp;&nbsp;     &nbsp;&nbsp; &nbsp;&nbsp;
                                <input class="form-check-input" type="checkbox" value="Thursday" id="defaultCheck6" name="ch1[]"
                                <?php if(isset($day[2]) == 'Thursday'){ echo 'checked';}?>>Thursday
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Start Date: <span class="tx-danger">*</span></label>
                               <input class="form-control" type="date" name="start_date">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">End Date: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="date" name="end_date">
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
