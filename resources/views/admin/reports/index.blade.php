@extends('admin.layouts.header')
@section('page_name')
    Student Mark
@endsection
@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Courses Details</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive table table-striped">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>

                        <th style="font-size: 12px;">Student Name</th>
                        <th style="font-size: 12px; ">Course Sp Number</th>
                        <th style="font-size: 12px; ">Course Name</th>
                        <th style="font-size: 12px; ">Course Session</th>
                        <th style="font-size: 12px; ">Mark</th>
                    </tr>
                    </thead>

                    <tbody>
                    @for($i = 0 ; $i<count($marks) ; $i++)
                        <tr>
                            <td style="font-size: 12px;">{{$student->name}}</td>
                            <td style="font-size: 12px;">{{$student->sp_number}}</td>
                            <td style="font-size: 12px;">{{$courseDetails[$i]->name}}</td>
                            <td style="font-size: 12px;">{{$courseDetails[$i]->session}}</td>

                            <td style="font-size: 12px;">{{$marks[$i]}}</td>

                        </tr>
                    @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
