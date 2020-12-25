@extends('admin.layouts.header')
@section('page_name')
    Search Invoice Using Serial
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary "style="font-family: cursive;">Search For Invoice Serial</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('/search/invoice/serial')}}">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="col-form-label" style="font-family: cursive;">Invoice Serial </label>
                                <input class="form-control"  name="serial" id="serial" style="font-family: cursive;" required >
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-2">
                            <div class="form-group">
                                <button class="btn btn-primary mg-r-5" style="margin-top: 30px; font-family: cursive;">Search</button>
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->

                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>
@endsection
