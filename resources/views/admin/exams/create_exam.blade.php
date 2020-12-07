@extends('admin.layouts.header')
@section('page_name')
    Print Exam
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary "style="font-family: cursive;">Print Exam</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('print/random/questions')}}">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Choose Course</label>
                                <select class="form-control" name="name" style="font-family: cursive;" required>
                                    <option></option>
                                    <option  value="Hardware">Hardware</option>
                                    <option value="Software">Software</option>
                                    <option value="Glass">Glass</option>
                                </select>
                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Number Of Question</label>
                                <input type="number"  min="1" max="30" class="form-control" name="number" style="font-family: cursive;"
                                       required>

                            </div>
                        </div><!-- col-6 -->
                        <div class="col-lg-2">
                            <div class="form-group">
                                <button class="btn btn-info mg-r-5" style="margin-top: 30px; font-family: cursive;">Print Exam</button>
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>
@endsection
