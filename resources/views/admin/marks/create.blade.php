@extends('admin.layouts.header')
@section('page_name')
    Add Mark For Student
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
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Insert Mark </label>
                                <input class="form-control" type="text" name="std_name" style="font-family: cursive;"
                                       placeholder="Add Mark Example A +A B C ...." required>
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
