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
    <title>Print Contract</title>
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
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <img src="{{asset('images/logoharmonex.png')}}" width="50" height="50">
            </div>
        </div>

        <div class="row">

            <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
                اتفاقيه التحاق بالدراسة في مركز هارمونكس
            </p>
            <br>

            <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
                الفريق الأول : شركة الألحان للخلويات
                <em>(</em>
                <em>هارمونكس</em>
                <em>)</em>
            </p>
            <br>

            <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
                الفريق الثاني :الطالب
                <em>(</em>
                <em style="font-size:14px;">أو من ينوب عنه ألغراض هذه الاتفاقيه في حال عدم وصول السن المانونًي</em>
                <em>)</em>
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
                {{$student->name_ar}}
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
                <?php 
            if($student->national_id != null){
                echo "الجنسيه : اردني";
            }else{
                echo "الجنسيه";
            }
            ?>
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
                <?php 
            if($student->national_id != null){
                echo "الرقم الوطني : ".$student->national_id;
            }else{
                echo "الرقم الوطني :";
            }
            ?></p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
                العنوان: {{$student->living}}
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
                تمهيد :
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                <?php
            $arrCourse = array();
             for($i =0 ; $i<count($array) ; $i++){
             $course=  \Illuminate\Support\Facades\DB::table("courses")->find($array[$i]);
             array_push($arrCourse,$course->name);
             }
             echo "  حيث يرغب الفريق الثاني بااللتحاق للدراسة في مركز و أكاديميه هارمونكس في دورة و ";
             for($i =0 ;$i<sizeof($arrCourse) ; $i++){
                 if($arrCourse[$i] == "Hardware"){
                     echo "هاردوير ,";
                 }
                 if($arrCourse[$i] == "Software"){
                    echo "السوفتوير ";
                }
                if($arrCourse[$i] == "Glass"){
                    echo "الزجاج ,";
                }
             }
            ?>
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
                والتي تبلغ تكلفتها {{$totalMoney}} دينار اردني
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                . و حيث وافق الفريق الاول على رغبة الفريق الثاني بااللتحاق للدراسة لديه في الدورة المذكورة . </p>
            </p>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                أعاله التي تبدأ في تاريخ...............
                و أعطًي رقم االلتحاق رقم الطالب {{$student->sp_number}} في مركز هارمونكس للتدرٌيب
            </p>
            <br>

            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                <b>أولا : آليات الرسوم الدراسية </b>
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                يتم تسديد الرسوم الدراسٌة بإحدى الطرق الاتيه :
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                .1 الدفع نقدا,شك بتاريخه,أو بطالة فٌزا الأتمانيه داخل الكليه
            </p>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                2عن طريق جهات اخرى جهات حكومٌة-جهات خاصة-جهات دولٌة بموجب كتاب صادر من تلك الجهات ٌفٌد
                تحملها نفقات دراسة طلبة البعثات الدراسٌة.
            </p>
            <br><br><br>
        </div>
        <!-- Page 2 -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <img src="{{asset('images/logoharmonex.png')}}" width="50" height="50">
            </div>
        </div>
    </div>
    <div class="row">
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
            <b>ثانيا : شروط التقسيط و التأخر عن الدفع </b>
        </p>
        <br>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
            فًي حال رغبة الطالب بالتقسيط يٌتم تسديد %50 من رسوم الدورة كدفعة عند التسجٌل و
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">

            الباقي بموجب شكات بنكيه آجلة أو كمبياله ماليه تستحق خلال مدة الدورة.
        </p>

    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    window.print();
    //setTimeout(8000);
    setTimeout("closerPrintView()", 6000);
});

function closerPrintView() {


}
</script>

</html>