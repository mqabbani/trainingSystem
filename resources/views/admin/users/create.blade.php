@extends('admin.layouts.header')
@section('page_name')
    Create New User
@endsection

@section('content')
    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">New User </h6>
        </div>

      <form method="post" action="{{url('/store/user')}}">
          @csrf
          <div class="card-body">
              <div class="row form-group mr-4">
                  <label class="col-sm-4 form-control-label" style="font-family: cursive;"> Firstname: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" class="form-control" style="font-family: cursive;" name="name" placeholder="Enter firstname" required>
                  </div>
              </div><!-- row -->
              <div class="row form-group mr-4">
                  <label class="col-sm-4 form-control-label" style="font-family: cursive;">Password: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="password" style="font-family: cursive;" class="form-control" name="password" placeholder="Enter password" required>
                  </div>
              </div>
              <div class="row form-group mr-4">
                  <label class="col-sm-4 form-control-label" style="font-family: cursive;">Email: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" style="font-family: cursive;" class="form-control" name="email" placeholder="Enter email address" required>
                  </div>
              </div>
              <div class="form-layout-footer mg-t-30">
                  <button class="btn btn-info mg-r-5" style="font-family: cursive;" name="submit">Submit Form</button>
              </div><!-- form-layout-footer -->
          </div>
      </form>
    </div>
@endsection
