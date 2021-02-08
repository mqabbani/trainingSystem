@extends('admin.layouts.header')
@section('page_name')
All Students Details
@endsection
@section('content')
    <!-- Page Heading -->
    <!-- Search form -->
     <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
           method="get" action="{{url('/search/student')}}">
                   <div class="input-group">
                       <input type="text" class="form-control bg-light border-0 small" name="std_search"
                              placeholder="Student Spical Number" aria-label="Search" aria-describedby="basic-addon2">
                       <div class="input-group-append">
                           <button class="btn btn-primary" type="submit" name="search">
                               <i class="fas fa-search fa-sm"></i>
                           </button>
                       </div>
                   </div>
               </form>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Students Details</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive table table-striped">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                    <th>#</th>
                        <th style="font-size: 12px; font-family: cursive">Student Number</th>
                        <th style="font-size: 12px; font-family: cursive">Student Image</th>
                        <th style="font-size: 12px;font-family: cursive">English Name</th>
                        <th style="font-size: 12px;font-family: cursive">Arabic Name</th>
                        <th style="font-size: 12px;font-family: cursive"> National ID</th>
                        <th style="font-size: 12px;font-family: cursive"> Phone Number</th>
                        <th style="font-size: 12px;font-family: cursive"> Extra Number</th>
                        <th style="font-size: 12px;font-family: cursive">Edit</th>
                        <th style="font-size: 12px;font-family: cursive">Delete</th>
                        <th style="font-size: 12px;font-family: cursive">More Details</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($students as $student)
                    <tr>
                    <td style="font-size: 12px;font-family: cursive">{{$loop->index}}</td>
                        <td style="font-size: 12px;font-family: cursive">{{$student->sp_number}}</td>
                        <td style="font-size: 12px;font-family: cursive"><img src="{{asset('/backend/img/'.$student->photo_name)}}" class="-image" width="50" height="50"/></td>
                        <td style="font-size: 12px;font-family: cursive">{{$student->name}}</td>
                        <td style="font-size: 12px;font-family: cursive">{{$student->name_ar}}</td>
                        <td style="font-size: 12px;font-family: cursive">{{$student->national_id}}</td>
                        <td style="font-size: 12px;font-family: cursive">{{$student->phone_number}}</td>
                        <td style="font-size: 12px;font-family: cursive">{{$student->phone_number_second}}</td>
                        <td style="font-size: 12px;font-family: cursive"><a href="{{url('/student/'.$student->id.'/edit')}}" class="btn btn-primary">Edit</a> </td>
                        <td style="font-size: 12px;font-family: cursive"><a href="{{url('/delete/'.$student->id.'/student')}}" class="btn btn-danger">Delete</a> </td>
                        <td style="font-size: 12px;font-family: cursive"><a href="{{url('/student/'.$student->id.'/show')}}" class="btn btn-light">More Details</a> </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$students->links()}}
            </div>
        </div>
    </div>
@endsection
