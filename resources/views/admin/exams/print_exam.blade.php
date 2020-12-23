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
<div class="container"  >
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <img src="{{asset('images/logoharmonex.png')}}" width="50" height="50">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <p>
                        <em style="font-size: 12px;">Receipt voucher Harmonex training Center </em>
                    </p>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                    <p><em style="font-size: 12px;">Student Name :  </em></p>
                    <p><em style="font-size: 12px;">Student Sp Number:  </em></p>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <p class="text-right">
                        <em style="font-size: 12px;">Date : {{\Illuminate\Support\Carbon::now()}} </em>
                    </p>
                    <p class="text-right">
                        <em style="font-size: 12px;">Course Name :{{$courseName}}  </em>
                    </p>
                </div>
            </div>

            <div class="row" style="margin-left: 25px;">
                @foreach($questions as $value)
                <table class="table table-hover"  >
                    <tr>
                        <p class="text-right">{{$value->text}}</p>
                    </tr>
                    <td>  <input class="custom-radio" type="radio">{{$value->answer1}}</td>
                    <td>  <input class="custom-radio" type="radio">{{$value->answer2}}</td>
                    <td>  <input class="custom-radio" type="radio">{{$value->answer3}}</td>
                    <td>  <input class="custom-radio" type="radio">{{$value->answer4}}</td>
                </table>
                @endforeach

            </div>
            <div class="row" style="margin-left: 200px;">
                <table class="table table-hover" >
                    <tr>Harmonex Training Center </tr><br>
                    <tr>0785858775 - 0781555517 </tr><br>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function (){
        setTimeout(9500);
        document.location.href = '{{URL::to('print/exam')}}';
    });
</script>
