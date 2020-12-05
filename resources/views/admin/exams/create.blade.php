@extends('admin.layouts.header')
@section('page_name')
    Add New Question
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
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label">Choose Course</label>
                                <select class="form-control" name="name"  required>
                                    <option></option>
                                    <option value="Hardware">Hardware</option>
                                    <option value="Software">Software</option>
                                    <option value="Glass">Glass</option>
                                </select>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label">Question</label>
                             <input class="form-control" type="text" placeholder="Enter Text For Question ...">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label">Answear One</label>
                                <input class="form-control" type="text"  placeholder="Answear One">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label">Answear Two</label>
                                <input class="form-control" type="text"  placeholder="Answear One">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label">Answear Three</label>
                                <input class="form-control" type="text"  placeholder="Answear One">
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label">Answear Four</label>
                                <input class="form-control" type="text"  placeholder="Answear One">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-2">
                            <div class="form-group">
                                <button class="btn btn-info mg-r-5" style="margin-top: 30px;">Add Question</button>
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>
@endsection
