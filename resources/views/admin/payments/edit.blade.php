@extends('admin.layouts.header')
@section('page_name')
    Edit Student Payment
@endsection
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Payment</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('/update/payment/'.$payment->id)}}">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label >Edit Payment : <span class="tx-danger">*</span></label>
                                <input class="form-control" name="payment" value="{{$payment->payment}}" required>
                            </div>
                        </div><!-- col-4 -->

                        <div class="col-lg-3">
                            <div class="form-group">
                                <button class="btn btn-info mg-r-5" style="margin-top: 30px;">Edit Payment</button>
                            </div>
                        </div><!-- col-4 -->

                    </div><!-- row -->

                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>

@endsection
