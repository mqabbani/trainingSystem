<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-language" content="text/html;charset=UTF-8">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Print Contract  Certificate </title>
    <style>

        .alignleft {
            float: left;
        }
        .alignright {
            float: right;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <img src="{{asset('images/logoharmonex.png')}}" width="50" height="50">
        </div>
        <div class="col-xs-12 col-sm=12 col-md-12 text-center">
            <p>
                <b style="font-size: 19px;">عقد اشتراك دوره تدريبيه</b>

            </p>
        </div>

        <div class="row">
            <p class="text-right"dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
                الفريق الأول: شركة الألحان للخلويات
                <em>(</em>
                <em>هارمونكس</em>
                <em>)</em>
            </p>
            <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar"  >     الفريق الثاني : {{$student->name_ar}}</p>
            <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar"> : مقدمه</p>
        <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">حيث أن الفريق الأول شركة متخصصة في مجال صيانة الأجهزة الخلوية والشاشات وتقوم بعمل دورات تدريبية لصيانة الأجهزة الخلوية والشاشات، وحيث يرغب الفريق الثاني بالاشتراك بهذه الدورات، فقد تم الاتفاق على ما يلي:
            </p>
            <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">
                - تعتبر مقدمة هذه الإتفاقية جزءً منها وتقرأ معها.
            </p>
            <br>
            <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">من المتفق عليه والمفهوم للفريق الثاني أن الفريق الأول يقوم بعمل دورات تدريبية، وعند انتهاء الدورة يقوم بإصدار شهادة تفيد باشتراك الفريق الثاني في الدورة فقط وأن هذه الشهادة صادرة عن الفريق الأول وليس عن أي جهة أخرى.
            </p>
            <br>
            <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">  يلتزم الفريق الثاني بدفع مبلغ لقاء الاشتراك بهذه الدورة {{$totalMoney}} دينار أردني.
        <br>
            <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">  يلتزم الفريق الثاني بجميع المبالغ المترتبة عليه في حال الانسحاب من الدورة لأي سبب كان و تنحصر مسوولية الفريق الأول في حال الانسحاب لأسباب صحية أو قاهرة بتأجيل موعد الدورة فقط مع تسديد كامل المستحقات .
            </p>
            <br>
            <?php
           // dd($certificateData);
            for($i =0 ; $i<count($array) ; $i++){
              $course=  \Illuminate\Support\Facades\DB::table("courses")->find($array[$i]);

                if($request->course_name_h == $course->name)
                    {
                        if($certificateData[$i] == "true"){
                            echo '<p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">';
                            echo   "- دوره الهاردوير  تشميل شهاده جامعه الاميره سميه لتكنولوجيا المعلومات";
                            echo '</p>';

                        }
                        if($certificateData == "false"){
                            echo '<p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">';
                            echo   " - دوره الهاردوير لا تشميل شهاده جامعه الاميره سميه لتكنولوجيا المعلومات ";
                            echo '</p>';
                        }
                    }
                else if($request->course_name_s == $course->name)
                {
                    if($certificateData[$i] == "true"){
                    echo '<p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">';
                    echo   "- دوره السوفتوير  تشميل شهاده جامعه الاميره سميه لتكنولوجيا المعلومات";
                    echo '</p>';
                }
                    if($certificateData == "false"){
                        echo '<p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">';
                        echo   " - دوره السوفتوير لا تشميل شهاده جامعه الاميره سميه لتكنولوجيا المعلومات ";
                        echo '</p>';
                    }

                }
              else  if($request->course_name_g == $course->name)
                {
                    if($certificateData[$i] == "true"){
                        echo '<p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">';
                        echo   "- دوره الزجاج  تشميل شهاده جامعه الاميره سميه لتكنولوجيا المعلومات";
                        echo '</p>';
                    }
                    if($certificateData == "false"){
                        echo '<p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">';
                        echo   " - دوره الزجاج لا تشميل شهاده جامعه الاميره سميه لتكنولوجيا المعلومات ";
                        echo '</p>';
                    }
                }
            }
            ?>
        </div>
    </div>
    <div class="flex-sm-row-reverse">
        <div id="textbox">
            <p>
                &nbsp;&nbsp;&nbsp;الفريق الاول  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; الفريق الثاني&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <img src="{{asset('images/logoharmonex.png')}}" width="50" height="50">
            </div>
            <div class="col-xs-12 col-sm=12 col-md-12 text-center">
                <p>
                    <b style="font-size: 19px;">عقد اشتراك دوره تدريبيه</b>

                </p>
            </div>

            <div class="row">
                <p class="text-right"dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
                    الفريق الأول: شركة الألحان للخلويات
                    <em>(</em>
                    <em>هارمونكس</em>
                    <em>)</em>
                </p>
                <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar"  >     الفريق الثاني : {{$student->name_ar}}</p>
                <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar"> : مقدمه</p>
                <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">حيث أن الفريق الأول شركة متخصصة في مجال صيانة الأجهزة الخلوية والشاشات وتقوم بعمل دورات تدريبية لصيانة الأجهزة الخلوية والشاشات، وحيث يرغب الفريق الثاني بالاشتراك بهذه الدورات، فقد تم الاتفاق على ما يلي:
                </p>
                <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">
                    - تعتبر مقدمة هذه الإتفاقية جزءً منها وتقرأ معها.
                </p>
                <br>
                <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">من المتفق عليه والمفهوم للفريق الثاني أن الفريق الأول يقوم بعمل دورات تدريبية، وعند انتهاء الدورة يقوم بإصدار شهادة تفيد باشتراك الفريق الثاني في الدورة فقط وأن هذه الشهادة صادرة عن الفريق الأول وليس عن أي جهة أخرى.
                </p>
                <br>
                <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">  يلتزم الفريق الثاني بدفع مبلغ لقاء الاشتراك بهذه الدورة {{$totalMoney}} دينار أردني.
                    <br>
                <p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">  يلتزم الفريق الثاني بجميع المبالغ المترتبة عليه في حال الانسحاب من الدورة لأي سبب كان و تنحصر مسوولية الفريق الأول في حال الانسحاب لأسباب صحية أو قاهرة بتأجيل موعد الدورة فقط مع تسديد كامل المستحقات .
                </p>
                <br>
                <?php
                for($i =0 ; $i<count($array) ; $i++){
                    $course=  \Illuminate\Support\Facades\DB::table("courses")->find($array[$i]);

                    if($request->course_name_h == $course->name)
                    {
                        if($certificateData[$i] == "true"){
                            echo '<p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">';
                            echo   "- دوره الهاردوير  تشميل شهاده جامعه الاميره سميه لتكنولوجيا المعلومات";
                            echo '</p>';
                        }
                        if($certificateData == "false"){
                            echo '<p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">';
                            echo   " - دوره الهاردوير لا تشميل شهاده جامعه الاميره سميه لتكنولوجيا المعلومات ";
                            echo '</p>';
                        }
                    }
                    if($request->course_name_s == $course->name)
                    {
                        if($certificateData[$i] == "true"){
                            echo '<p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">';
                            echo   "- دوره السوفتوير  تشميل شهاده جامعه الاميره سميه لتكنولوجيا المعلومات";
                            echo '</p>';
                        }
                        if($certificateData == "false"){
                            echo '<p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">';
                            echo   " - دوره السوفتوير لا تشميل شهاده جامعه الاميره سميه لتكنولوجيا المعلومات ";
                            echo '</p>';
                        }

                    }
                    if($request->course_name_g == $course->name)
                    {
                        if($certificateData[$i] == "true"){
                            echo '<p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">';
                            echo   "- دوره الزجاج  تشميل شهاده جامعه الاميره سميه لتكنولوجيا المعلومات";
                            echo '</p>';
                        }
                        if($certificateData == "false"){
                            echo '<p class="text-right" style="font-size: 19px;padding-right: 30px;"dir="rtl" lang="ar">';
                            echo   " - دوره الزجاج لا تشميل شهاده جامعه الاميره سميه لتكنولوجيا المعلومات ";
                            echo '</p>';
                        }
                    }
                }
                ?>
            </div>
        </div>
        <div class="flex-sm-row-reverse">
            <div id="textbox">
                <p>
                    &nbsp;&nbsp;&nbsp;الفريق الاول  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; الفريق الثاني&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

            </div>
        </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <p>
            <b style="font-size: 25px;" class="text-center" dir="rtl" lang="ar">سند تعهد بالدفع</b>
        </p>
    </div>
    <div class="row">
        <p class="text-right" style="font-size: 23px;"> انا الموقع ادناه {{$student->name_ar}}
            احمل الرقم الوطني    {{$student->national_id}} </p>
        <p class="text-right" style="font-size: 23px;">أتعهد بدفع مبلغ {{$totalMoney}} دينار </p>
        <br><br>
        <p class="text-right" style="font-size: 23px;"> للسادة شركة الألحان للخلويات بتاريخ {{\Carbon\Carbon::now()->toDateString()}}  ويعتبر هذا المبلغ ديناً بذمتي، ويعتبر هذا السند سند تنفيذي قابل للتنفيذ لدى دوائر التنفيذ المختصة، وأسقط حقي بالطعن به بأي شكل من الأشكال.
        </p>
    </div>
    <div class="row">
        <div id="textbox">
            <p class="alignleft" dir="rtl" lang="ar" style="font-size: 20px; margin-left: 20px;">عليه اوقع</p>
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
