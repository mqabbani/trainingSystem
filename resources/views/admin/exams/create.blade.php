@extends('admin.layouts.header')
@section('page_name')
    Add New Question
@endsection
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary "style="font-family: cursive;">Add New Question</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('add/new/question')}}">
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
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Question</label>
                             <input class="form-control" type="text" style="font-family: cursive;" name="text"
                                    placeholder="Enter Text For Question ..." required>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Answer One</label>
                                <input class="form-control" type="text" name="answer1"  style="font-family: cursive;"
                                       placeholder="Answer One" required>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Answer Two</label>
                                <input class="form-control" type="text" name="answer2" style="font-family: cursive;"
                                       placeholder="Answer Two" required>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Answer Three</label>
                                <input class="form-control" type="text" name="answer3" style="font-family: cursive;"
                                       placeholder="Answer Three" required>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Answer Four</label>
                                <input class="form-control" type="text" name="answer4" style="font-family: cursive;"
                                       placeholder="Answer Four" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-2">
                            <div class="form-group">
                                <button class="btn btn-info mg-r-5" style="margin-top: 30px; font-family: cursive;">Add Question</button>
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>
@endsection
