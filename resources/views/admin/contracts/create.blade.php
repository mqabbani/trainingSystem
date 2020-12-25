@extends('admin.layouts.header')
@section('page_name')
    Create Contracts
@endsection
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary "style="font-family: cursive;">Contract</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('/print/contract')}}">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Student Name Arabic</label>
                                <input type="text"  class="form-control"
                                      placeholder="Student Name Arabic" name="name" style="font-family: cursive;" required>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Student National ID</label>
                                <input type="text"  class="form-control"
                                       placeholder="National ID" name="national_id" style="font-family: cursive;" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Total Courses Price</label>
                                <input type="text"  class="form-control"
                                       placeholder="Total Courses Price" name="price" style="font-family: cursive;" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Certificate </label>
                                <input class="form-check" type="checkbox" value="1" id="defaultCheck1" name="ch1">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Date </label>
                                <input class="form-control" type="date" name="date" required>
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-2">
                            <div class="form-group">
                                <button class="btn btn-info mg-r-5" style="margin-top: 30px; font-family: cursive;">Create Contract</button>
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>
@endsection
