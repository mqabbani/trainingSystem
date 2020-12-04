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
                                <button class="btn btn-info mg-r-5" style="margin-top: 30px;">Add Payment</button>
                            </div>
                        </div><!-- col-4 -->

                    </div><!-- row -->

                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>

@endsection
