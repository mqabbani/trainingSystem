@extends('admin.layouts.header')
@section('page_name')
    Quick Information
@endsection
@section('content')
<div class="row">

    <div class="col-lg-3">
        <div class="card text-white bg-gradient-danger mb-3">
            <div class="card-header bg-gradient-danger" >Number Of Student</div>
            <div class="card-body">
                <h5 class="card-title"><li class="fa fa-user"></li> {{$array['Number Of Student']}}</h5>
            </div>
        </div>
    </div><!--col-lg3 -->


    <div class="col-lg-3">
        <div class="card text-white bg-gradient-warning mb-3">
            <div class="card-header bg-gradient-warning" >Course Pending</div>
            <div class="card-body">
                <h5 class="card-title"><li class="fa fa-power-off"></li> {{$array['Course Pending']}}</h5>
            </div>
        </div>
    </div><!--col-lg3 -->

    <div class="col-lg-3">
        <div class="card text-white bg-gradient-success mb-3">
            <div class="card-header bg-gradient-success" >Course Active</div>
            <div class="card-body">
                <h5 class="card-title"><li class="fa fa-hourglass-start"></li> {{$array['Course Active']}}</h5>
            </div>
        </div>
    </div><!--col-lg3 -->

    <div class="col-lg-3">
        <div class="card text-white bg-gradient-dark mb-3">
            <div class="card-header bg-gradient-dark" >Course Finished</div>
            <div class="card-body">
                <h5 class="card-title"><li class="fa fa-toggle-on"></li> {{$array['Course Finished']}}</h5>
            </div>
        </div>
    </div><!--col-lg3 -->

    <div class="col-lg-3">
        <div class="card text-white bg-gradient-dark mb-3">
            <div class="card-header bg-gradient-dark" >Student Pay For Today </div>
            <div class="card-body">
                <h5 class="card-title"><li class="fa fa-user"></li> {{$array['Students Pay For today']}}</h5>
            </div>
        </div>
    </div><!--col-lg3 -->

    <div class="col-lg-3">
        <div class="card text-white bg-gradient-secondary mb-3">
            <div class="card-header bg-gradient-secondary" >Total Cash Per Day  </div>
            <div class="card-body">
                <h5 class="card-title"><li class="fa fa-user"></li> {{$array['Total Cash Per Day']}}</h5>
            </div>
        </div>
    </div><!--col-lg3 -->
</div>
@endsection
