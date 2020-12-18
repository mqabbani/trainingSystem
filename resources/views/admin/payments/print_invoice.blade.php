
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
<body>

<div class="container">
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
                    <h6>Payment Number : 4856abc</h6>
                </div>
                <div class="text-right">
                    <h6> 50.00:JOD </h6>
                </div>
                </span>
                <table class="table table-hover">
                    <thead >
                    <tr >Student Name : Mohammad Qabbani</tr>
                    <br>
                        <tr>Student Number :079*******  </tr>
                    <br>
                        <tr>National ID : 9961005354</tr>
                    <br>
                        <tr>Student Sp Number : 202011302</tr>
                    <br>
                        <tr>Received From : استلمنا من يلدز ياسين </tr>
                    <br>
                        <tr>The Sum of : خمسون دينار فقط </tr>
                    <br>
                        <tr>Payment Method :</tr>
                    <br>
                        <tr>Reason Of :</tr>
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
</body>
</html>
