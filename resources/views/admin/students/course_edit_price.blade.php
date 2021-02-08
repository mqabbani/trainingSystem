@extends('admin.layouts.header')
@section('page_name')
    Edit Course Price For Student
@endsection
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Course Price</h6>
        </div>
        <div class="card-body">
            <form method="post" 
            action="{{url('/student/'.$courseDetails->student_id.'/edit/'.$courseDetails->course_id.'/price')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Full Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" readonly name="name" required 
                                value="{{$student->name}}">
                            </div>
                        </div><!-- col-4 -->
                    
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Course Name: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" readonly name="name_ar"  
                                required value="{{$course->name}}">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label">Session: <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="name_ar"  required readonly
                                 value="{{$course->session}}">
                            </div>
                        </div><!-- col-4 -->
                        
                        <div class="col-lg-6">
                            <div class="form-group mg-b-10-force">
                                <label class="form-control-label">Price <span class="tx-danger">*</span></label>
                                <input class="form-control" type="text" name="price" require
                                      value="{{$courseDetails->price}}" >
                            </div>
                        </div><!-- col-8 -->
                    </div><!-- row -->
                    <div class="form-layout-footer">
                        <button class="btn btn-info mg-r-5">Submit </button>
                    </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>
@endsection
