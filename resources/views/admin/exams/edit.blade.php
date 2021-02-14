@extends('admin.layouts.header')
@section('page_name')
    edit Question
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary "style="font-family: cursive;">Add New Question</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('/update/'.$exams->id.'/question')}}">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" >Choose Course</label>
                                <select class="form-control" name="name"  required>
                                    <option></option>
                                    <option  value="Hardware" @if($exams->name == "Hardware")selected @endif >Hardware</option>
                                    <option @if($exams->name == "Software")selected @endif value="Software">Software</option>
                                    <option @if($exams->name == "Glass")selected @endif value="Glass">Glass</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" >Question</label>
                                <input class="form-control" type="text"  name="text" value="{{$exams->text}}"
                                       placeholder="Enter Text For Question ..." required>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" >Answer One</label>
                                <input class="form-control" type="text" name="answer1"  value="{{$exams->answer1}}"
                                       placeholder="Answer One" required>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" >Answer Two</label>
                                <input class="form-control" type="text" name="answer2"  value="{{$exams->answer2}}"
                                       placeholder="Answer Two" required>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" >Answer Three</label>
                                <input class="form-control" type="text" name="answer3"  value="{{$exams->answer3}}"
                                       placeholder="Answer Three" required>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" >Answer Four</label>
                                <input class="form-control" type="text" name="answer4"  value="{{$exams->answer4}}"
                                       placeholder="Answer Four" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-2">
                            <div class="form-group">
                                <button class="btn btn-info mg-r-5" style="margin-top: 30px; ">Update Question</button>
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>
@endsection
