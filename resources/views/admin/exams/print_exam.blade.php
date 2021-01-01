<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Print Exam</title>
</head>
<body onload="window.print()">
<div class="container" >
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <img src="{{asset('images/logoharmonex.png')}}" width="50" height="50">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <p>
                <em style="font-size: 12px;"> Harmonex training Center </em>
            </p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 ">

                <em style="font-size: 12px;"> Student Name :</em>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <em style="font-size: 12px;"> Student Sp Number : </em>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <em style="font-size: 12px;"> {{\Carbon\Carbon::now()->toDateString()}} </em>
        </div>
        <br>
        <div class="col-xs-12 col-sm-12 col-md-12 ">

            <em style="font-size: 12px;"> Course Name : {{$courseName}} </em>
        </div>
    </div>
    <hr class="row" >
        @foreach($questions as $value)
        <div class="col-xs-12 col-sm-12 col-md-12 text-right ">
            <em dir="rtl" lang="ar" style="font-size: 16px;">{{$value->text}} </em>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 ">
            <input type="radio" class="custom-radio" dir="rtl" lang="ar" style="font-size: 12px;">{{$value->answer1}}
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="custom-radio" dir="rtl" lang="ar" style="font-size: 12px;">{{$value->answer2}}
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="custom-radio" dir="rtl" lang="ar" style="font-size: 12px;">{{$value->answer3}}
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" class="custom-radio" dir="rtl" lang="ar" style="font-size: 12px;">{{$value->answer4}}
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
            <hr>

        @endforeach

    </div>

</body>
</html>
<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function (){
       // setTimeout(9500);
        setTimeout("closerPrintView()",6000);
    });
    function  closerPrintView(){
        document.location.href = '{{URL::to('print/exam')}}';

    }
</script>
