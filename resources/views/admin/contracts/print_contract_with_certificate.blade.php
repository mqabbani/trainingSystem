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
    <title>Print Contract With Certificate </title>
</head>
<style>
    .alignleft {
        float: left;
    }
    .alignright {
        float: right;
    }
    @media print {
        body {
            -webkit-print-color-adjust: exact;
        }
    }

    .vendorListHeading th {
        background-color: #1a4567 !important;
        color: white !important;
    }
</style>
<body >
<div class="container"  >
    <div class="row text-center" >
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <img src="{{asset('images/logoharmonex.png')}}" width="50" height="50">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <p>
                        <b style="font-size: 19px;">عقد اشتراك دوره تدريبيه</b>
                    </p>
                </div>
            </div>

            <div class="row text-center">
                <p class="text-right"dir="rtl" lang="ar" style="font-size: 19px;">
                    الفريق الأول: شركة الألحان للخلويات
                    <em>(</em>
                    <em>هارمونكس</em>
                    <em>)</em>
                </p>
                <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;"> : الفريق الثاني</p>
                <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;"> : مقدمه</p>
                <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;">حيث أن الفريق الأول شركة متخصصة في مجال صيانة الأجهزة الخلوية والشاشات وتقوم بعمل دورات تدريبية لصيانة الأجهزة الخلوية والشاشات، وحيث يرغب الفريق الثاني بالاشتراك بهذه الدورات، فقد تم الاتفاق على ما يلي:
                    - تعتبر مقدمة هذه الإتفاقية جزءً منها وتقرأ معها.
                </p>
                <br>
                <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;">- من المتفق عليه والمفهوم للفريق الثاني أن الفريق الأول يقوم بعمل دورات تدريبية، وعند انتهاء الدورة يقوم بتسليم الفريق الثاني شهادة صادرة عن المركز وشهادة من جامعة الأميرة سمية لتكنولوجيا المعلومات.
                </p>

                <br>
                <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;">  يلتزم الفريق الثاني بدفع مبلغ لقاء الاشتراك بهذه الدورة {{$totalMoney}} دينار أردني.
                </p>
                <br>
                <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;">  يلتزم الفريق الثاني بجميع المبالغ المترتبة عليه في حال الانسحاب من الدورة لأي سبب كان و تنحصر مسوولية الفريق الأول في حال الانسحاب لأسباب صحية أو قاهرة بتأجيل موعد الدورة فقط مع تسديد كامل المستحقات .
                </p>
                <div class="row">
                    <div id="textbox">
                        <p dir="rtl" lang="ar">
                            &nbsp;&nbsp;&nbsp;الفريق الاول  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; الفريق الثاني&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

                    </div>
                </div>

            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <br><br>
                <div class="row text-center">
                    <div class="col-xs-4 col-sm-4 col-md-4 text-center">
                    </div>
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <p>
                            <b style="font-size: 25px;"  class="text-center" dir="rtl" lang="ar">سند تعهد بالدفع</b>
                        </p>
                    </div>
                </div>
                    <div class="row text-center">
                        <p class="text-right" dir="rtl" lang="ar" style="font-size: 23px;"> انا الموقع ادناه {{$student->name_ar}}
                            احمل الرقم الوطني    {{$student->national_id}} </p>
                        <p class="text-right" style="font-size: 23px;">أتعهد بدفع مبلغ {{$totalMoney}} دينار </p>
                        <br><br>
                        <p class="text-right" style="font-size: 23px;"> للسادة شركة الألحان للخلويات بتاريخ {{\Carbon\Carbon::now()->toDateString()}}  ويعتبر هذا المبلغ ديناً بذمتي، ويعتبر هذا السند سند تنفيذي قابل للتنفيذ لدى دوائر التنفيذ المختصة، وأسقط حقي بالطعن به بأي شكل من الأشكال.
                        </p>
                    </div>
            <div class="row">
                <div id="textbox">
                    <p class="alignleft" style="font-size: 20px;">عليه اوقع</p>
                </div>
            </div>
            <!--<div class="row" style="margin-left: 200px;">
                <table class="table table-hover" >
                    <tr>Harmonex Training Center </tr><br>
                    <tr>0785858775 - 0781555517 </tr><br>
                </table>
            </div>-->
        </div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (){
        window.print();
        //setTimeout(8000);
        setTimeout("closerPrintView()",6000);    });
    function  closerPrintView(){
        document.location.href = '{{URL::to('create/student')}}';

    }
</script>

</html>
