
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
    <title>Print Invoice</title>
</head>
<body onload="window.print()">

<div class="container" >
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <img src="{{asset('images/logoharmonex.png')}}" width="50" height="50">
                    <address>
                        <h6><b>Harmonex Training Center</b> </h6>

                        <abbr title="Phone">P:</abbr> 078-5858775
                        <br>
                        <abbr title="Phone">P:</abbr> 078-1555517
                    </address>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 text-right">
                    <p>
                        <em>Harmonex -سند قبض </em>
                    </p>
                    <p>
                        <em>Receipt voucher Harmonex training Center </em>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="text-right">
                    <h6>Date : {{\Carbon\Carbon::now()}}</h6>
                </div>
                <div class="text-left">
                    <h6>Payment Number : {{$DataInvoice[2]}}</h6>
                </div>
                <div class="text-right">
                    <h6> {{$DataInvoice[0]}}:JOD </h6>
                </div>

                <table class="table table-hover">
                    <thead >
                    <tr >Student Name : {{$student->name}}</tr>
                    <br>
                        <tr>Student Number :{{$student->phone_number}} </tr>
                    <br>
                        <tr>National ID : {{$student->national_id}}</tr>
                    <br>
                        <tr>Student Sp Number : {{$student->sp_number}}</tr>
                    <br>
                        <tr>Received From : استلمنا من  {{$student->name_ar}} </tr>
                    <br>
                        <tr>The Sum of : خمسون دينار فقط </tr>
                    <br>
                        <tr>Payment Method :{{$DataInvoice[1]}}</tr>
                    <br>
                        <tr>Reason Of : جزء من سعر الدوره</tr>
                    <br>
                    <td>

                        <tr>  Signature :  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;</tr>
                        <tr>Recevied By  : </tr>
                    </td>
                    </thead>
                </table>

            </div>
        </div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (){
        setTimeout(5000);
        document.location.href = '{{URL::to('/all/student')}}';
    });
</script>

</html>
