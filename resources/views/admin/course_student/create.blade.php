@extends('admin.layouts.header')
@section('page_name')
    Register Student To Course
@endsection
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Register New Student</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('register/student/course')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Student Number: </label>
                                <input class="form-control" type="text" name="sp_number" required placeholder="Enter Special Number Student">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Hardware Course </label>
                                <input class="form-control" type="text" name="course_name_h" value="Hardware" readonly>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Session Course</label>
                                <select class="form-control" type="text" name="course_session_h" >
                                    <option></option>
                                    @foreach($hardware as $hard)
                                        <option value="{{$hard->id}}">{{$hard->session}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Software Course </label>
                                <input class="form-control" type="text" value="Software" name="course_name_s" readonly>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Session Course</label>
                                <select class="form-control"  name="course_session_s" >
                                    <option></option>
                                    @foreach($software as $hard)
                                        <option value="{{$hard->id}}">{{$hard->session}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Glass Course </label>
                                <input class="form-control" type="text" value="Glass" name="course_name_g" readonly>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Session Course</label>
                                <select class="form-control"  name="course_session_g" >
                                    <option></option>
                                    @foreach($glass as $hard)
                                        <option value="{{$hard->id}}">{{$hard->session}}</option>
                                    @endforeach
                                </select>
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

