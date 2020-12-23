
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
<!--onload="window.print()"-->
<body onload="window.print()">
<div class="container"  >
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <img src="{{asset('images/logoharmonex.png')}}" width="50" height="50">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                    <p>
                        <em>Harmonex -سند قبض </em>
                    </p>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <p>
                        <em style="font-size: 12px;">Receipt voucher Harmonex training Center </em>
                    </p>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                    <p>
                        <em>Serial Number :  {{$DataInvoice[5]}}</em>
                    </p>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <p class="text-right">
                        <em style="font-size: 12px;">Date : {{\Illuminate\Support\Carbon::now()}} </em>
                    </p>
                </div>
            </div>


            <div class="row" style="margin-left: 25px;">

                <table class="table table-hover"  >
                    <tr >Company Name       : Harmonex Training Center </tr> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;<tr>{{ $DataInvoice[0]}} JOD</tr><br>
                    <tr >Student Name      : {{$student->name}} </tr><br>
                    <tr>Student Number     :  {{$student->phone_number}} </tr><br>
                    <tr>Student Sp Number  : {{$student->sp_number}} </tr><br>
                    <tr>Received From      :   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  استلمنا من {{$DataInvoice[3]}}</tr><br>
                    <tr>The Sum Of         :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; مبلغ وقدره {{$DataInvoice[4]}} </tr><br>
                    <tr>Payment Method     :   {{$DataInvoice[1]}} طريقه الدفع </tr><br>
                    <tr>Reason Of Payment  :    سبب الدفع تكمله من سعر الدوره</tr><br><br>
                    <tr>Signature By         :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     الوقيع     </tr><br>
                    <br>
                </table>

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
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container" >
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <img src="{{asset('images/logoharmonex.png')}}" width="50" height="50">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                    <p>
                        <em>Harmonex -سند قبض </em>
                    </p>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <p>
                        <em style="font-size: 12px;">Receipt voucher Harmonex training Center </em>
                    </p>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                    <p>
                        <em>Serial Number :  </em>
                    </p>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <p class="text-right">
                        <em style="font-size: 12px;">Date : {{\Illuminate\Support\Carbon::now()}} </em>
                    </p>
                </div>
            </div>


            <div class="row" style="margin-left: 25px;">

                <table class="table table-hover"  >
                    <tr >Company Name       : Harmonex Training Center </tr>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;<tr>{{ $DataInvoice[0]}} JOD</tr><br>
                    <tr >Student Name      : {{$student->name}} </tr><br>
                    <tr>Student Number     :  {{$student->phone_number}} </tr><br>
                    <tr>Student Sp Number  : {{$student->sp_number}} </tr><br>
                    <tr>Received From      :   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  استلمنا من {{$DataInvoice[3]}}</tr><br>
                    <tr>The Sum Of         :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; مبلغ وقدره {{$DataInvoice[4]}} </tr><br>
                    <tr>Payment Method     :   {{$DataInvoice[1]}} طريقه الدفع </tr><br>
                    <tr>Reason Of Payment  :    سبب الدفع تكمله من سعر الدوره</tr><br><br>
                    <tr>Received By         :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     الوقيع     </tr><br>
                    <br>
                </table>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (){
        setTimeout(9000);
        document.location.href = '{{URL::to('/all/student')}}';
    });
</script>

</html>
