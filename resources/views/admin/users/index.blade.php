@extends('admin.layouts.header')
@section('page_name')
    Show All Users
@endsection
@section('content')
    <!-- DataTales Example -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="font-family: cursive;">User Information</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="font-family: cursive;">Name</th>
                        <th style="font-family: cursive;">Email</th>
                        <th style="font-family: cursive;">Edit</th>
                        <th style="font-family: cursive;">Delete</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td style="font-family: cursive;">{{$user->name}}</td>
                            <td style="font-family: cursive;">{{$user->email}}</td>
                            <td style="font-family: cursive;"><a href="{{url('/user/'.$user->id.'/edit')}}" class="btn btn-primary">Edit</a></td>
                            <td style="font-family: cursive;"><a href="{{url('/user/'.$user->id)}}"  class="btn btn-danger">Delete</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
