@extends('admin.layouts.header')
@section('page_name')
    Details Payment For Student
@endsection
@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Add Payment</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{url('search/payment')}}">
                @csrf
                <div class="form-layout">
                    <div class="row mg-b-25">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label >Student Special Number: <span class="tx-danger">*</span></label>
                                <input class="form-control" name="name" id="sp_number">
                            </div>
                        </div><!-- col-4 -->
                        <div class="col-lg-4">
                            <div class="form-group">
                                <button class="btn btn-info mg-r-5" style="margin-top: 30px;">Search</button>
                            </div>
                        </div><!-- col-4 -->
                    </div><!-- row -->
                </div><!-- form-layout -->
            </form>
        </div><!-- card -->
    </div>

@endsection
