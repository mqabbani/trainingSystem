@extends('admin.layouts.header')
@section('page_name')
    Student Marks
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary "style="font-family: cursive;">Add Mark</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('/add/mark')}}">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Choose Course</label>
                                <select class="form-control"  name="course_name" id="course_name" style="font-family: cursive;"
                                        required >
                                    <option></option>
                                    <option value="Hardware">Hardware</option>
                                    <option value="Software">Software</option>
                                    <option value="Glass">Glass</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Choose Session</label>
                                <select class="form-control" type="text" name="course_session" id="course_session" style="font-family: cursive;"
                                       required >

                                </select>
                            </div>
                        </div><!-- col-4 -->


                        <div class="col-lg-2">
                            <div class="form-group">
                                <button class="btn btn-warning mg-r-5" style="margin-top: 30px; font-family: cursive;">Add</button>
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>
@endsection
