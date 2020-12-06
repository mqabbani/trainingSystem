@extends('admin.layouts.header')
@section('page_name')
    All Question
@endsection
@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="font-family: cursive;">Questions</h6>

        </div>
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
              method="get" action="{{url('/search/question')}}">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" name="std_search"
                       placeholder="Hardware Or Software Or Glass" aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit" name="search">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>


        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th style="font-family: cursive;font-size: 12px;">#</th>
                        <th style="font-family: cursive;font-size: 12px;">Course</th>
                        <th style="font-family: cursive;font-size: 12px;">Text</th>
                        <th style="font-family: cursive;font-size: 12px;">A1</th>
                        <th style="font-family: cursive;font-size: 12px;">A2</th>
                        <th style="font-family: cursive;font-size: 12px;">A3</th>
                        <th style="font-family: cursive;font-size: 12px;">A4</th>
                        <th style="font-family: cursive;font-size: 12px;">Edit</th>
                        <th style="font-family: cursive;font-size: 12px;">Delete</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tbody>
                    @foreach($exams as $exam)
                        <tr>
                            <td style="font-family: cursive;font-size: 12px;">{{$loop->index}}</td>
                            <td style="font-family: cursive;font-size: 12px;">{{$exam->name}}</td>
                            <td style="font-family: cursive;font-size: 12px;">{{$exam->text}}</td>
                            <td style="font-family: cursive;font-size: 12px;"> {{$exam->answer1}}</td>
                            <td style="font-family: cursive;font-size: 12px;"> {{$exam->answer2}}</td>
                            <td style="font-family: cursive;font-size: 12px;"> {{$exam->answer3}}</td>
                            <td style="font-family: cursive;font-size: 12px;"> {{$exam->answer4}}</td>
                            <td style="font-family: cursive;font-size: 12px;">
                                <a href="{{url('edit/'.$exam->id.'/question')}}" class=" btn btn-primary"> Edit</a> </td>
                            <td style="font-family: cursive;font-size: 12px;">
                                <a href="{{url('/delete/'.$exam->id.'/question')}}" class="btn btn-danger">Delete</a> </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$exams->links()}}
            </div>
        </div>
    </div>
@endsection
