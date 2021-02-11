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

            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                اتفاقيه التحاق بالدراسة في مركز هارمونكس
            </p>
            <br>

            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                الفريق الأول : شركة الألحان للخلويات
                <em>(</em>
                <em>هارمونكس</em>
                <em>)</em>
            </p>
            <br>

            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                الفريق الثاني :الطالب
                <em>(</em>
                <em style="font-size:14px;">أو من ينوب عنه ألغراض هذه الاتفاقيه في حال عدم وصول السن المانونًي</em>
                <em>)</em>
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                {{$student->name_ar}}
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                <?php 
            if($student->national_id != null){
                echo "الجنسيه : اردني";
            }else{
                echo "الجنسيه";
            }
            ?>
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                <?php 
            if($student->national_id != null){
                echo "الرقم الوطني : ".$student->national_id;
            }else{
                echo "الرقم الوطني :";
            }
            ?></p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                العنوان: {{$student->living}}
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                تمهيد :
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
                <?php
            $arrCourse = array();
            //dd($array);
             for($i =0 ; $i<count($array) ; $i++){
             $course=  \Illuminate\Support\Facades\DB::table("courses")->find($array[$i]);
             
             array_push($arrCourse,$course->name);
            
             }
             echo "  حيث يرغب الفريق الثاني بااللتحاق للدراسة في مركز و أكاديميه هارمونكس في دورة  ";
             for($i =0 ;$i<sizeof($arrCourse) ; $i++){
                 if($arrCourse[$i] == "Hardware"){
                     echo "هاردوير ,";
                 }
                 if($arrCourse[$i] == "Software"){
                    echo "السوفتوير ,";
                }
                if($arrCourse[$i] == "Glass"){
                    echo "الزجاج ,";
                }
             }
            ?>
            </p>
            <br>
            <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
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
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
            <b>ثانيا : شروط التقسيط و التأخر عن الدفع </b>
        </p>
        <br>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
            فًي حال رغبة الطالب بالتقسيط يٌتم تسديد %50 من رسوم الدورة كدفعة عند التسجٌل و
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">

            الباقي بموجب شكات بنكيه آجلة أو كمبياله ماليه تستحق خلال مدة الدورة.
        </p>
        <br>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
        <b>ثالثا: تعليمات الانسحاب و التأجيل </b>
        </p>
        </br>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
        1. في حال انسحاب أو تأجيل الطالب للدراسة قبل بدء الدورة يخصم على الطالب 20% من رسوم تسجيل الدورة ويرد له باقي المبلغ المدفوع.
        </p>
        </br>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
        2. في حال انسحاب الطالب بعد اليوم الأول من تاريخ بدء الدورة يتم خصم قيمة كامل رسوم الدورة و لا يرد أي مبلغ للطالب المنسحب و كذلك الحال بالنسبة للطالب الملتحق ببرنامج الأقساط.
        </p>
        </br>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
        3. تتم عملية الانسحاب أو التأجيل فقط بموجب نموذج إشعار خطي للانسحاب أو التأجيل الذي بإمكان الطالب الحصول عليه من مكتب التسجيل لإتمام عملية الانسحاب أو التأجيل يعبا الطالب النموذج ويجب توقيعه من قبل إدارة المركز.
        </p>
        </br>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
        4. عدم حضور الحصص الدراسية لا يعتبر انسحابا أو تأجيلا من الدورة و يعد الطالب مسجلا في الدورة ما لم يقدم الطالب إشعارا (خطيا) بالانسحاب أو التأجيل.
        </p>
        </br>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 18px;padding-right: 30px;">
        <b>رابعا: الحضور و الغياب</b>
        </p>
        </br>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        يتوجب على الطالب الالتزام بالحضور و الغياب و في حال تغيب الطالب - الطالبة ما نسبته أكثر         </p>
        
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        من 20% من عدد المحاضرات فلن يتم تسليم شهادة في الدورة
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        <b>خامسا:معلومات حول الشهادات</b>
        </p>
        </br>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        بعد إتمام كامل الدراسة و النجاح في الدورة يحصل الطالب على شهادة من مركز هارمونكس .
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        <?php
        if(in_array(true,$certificateData))
        {
            echo "و شهادة من جامعة الأميرة سمية لتكنولوجيا المعلومات";
        }
        ?>
        </p>
        </br>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        (اقر إنني قمت بقراءة تعليمات الشهادات أعلاه)
        </p>
        </br>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        اسم الطالب:
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        توقيع الطالب:
        </p>
        </br></br>
    </div>
    <!-- Page 3-->
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <img src="{{asset('images/logoharmonex.png')}}" width="50" height="50">
            </div>
        </div>
    <div class="row">
    <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
    <b>سادسا: متطلبات القبول:</b>
     </p>
     <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
     1. أن لا يقل عمر الطالب عن 14 عاما عند بداية الدراسة في الدورة التابعة لمركز هارمونكس و في حال كان
      <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
      الطالب تحت سن 18 عام على ولي أمره التوقيع على هذه الاتفاقية.
      </p>
    </p>
        </br>

        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        <b>سابعا : التزامات و تعهدات الطالب: </b>
        </p>
     <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
     1. عند بدء الدراسة يقوم الطالب بتزويد مركز هارمونكس بعنوانه البريدي أو السكني للمراسلات و بريد الكتروني
     </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        فعال,رقم هاتف فعال , اسم ورقم هاتف الوصي للاتصال به  في حال الطوارئ بعد تاريخ المباشرة يتعهد الطالب     </p>
    </p>

    <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
    بإبقاء مركز هارمونكس على علم بأي تغير يطرأ على المعلومات الخاصة بالاتصال به و التي تشمل البريد الالكتروني
     </p>
    <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
    رقم هاتف خلوي و العنوان البريدي أو السكني عدم التزام الطالب بذلك و ما ينتج عنها من عدم إيصال المعلومات
        </p>
    <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
    من قبل مركز هارمونكس تكون من مسوولية الطالب ولا تؤثر على المعلومات المرسلة إلى عنوان التواصل
    </p>
    <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
    المسجل العنوان السكني أو رقم هاتف الطالب.
    </p>
    </br>

    <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
2. يتعهد الطالب بقراءة و التزام بكافة سياسات مركز هارمونكس المنصوص عليها و المتضمنة في هذه الاتفاقية و
     </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        في نموذج التسجيل و في جدول الرسوم و في دليل الطالب الخاص بمركز هارمونكس و الذي يتم تزيد الطالب به
            </p>

    <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
    عند التسجيل أو منشورات صادرة عن المركز أو تعليمات أو تعاميم أو أوامر أو لوائح رسمية صادرة عن مدير
     </p>
    <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
    لمركز سواء كانت قبل توقيع هذا الطلب أو بعد ذلك أو أثناء الدراسة حيث تعتبر أي تعليمات أو تعاميم أو أوامر
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        أو لوائح رسمية صادرة عن مدير المركز سارية بحق الطالب من تاريخ صدورها و ملغية لو أو معدلة لأي تعليمات
                </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        أو تعاميم أو أوامر أو لوائح رسمية صادرة قبلها
        </p>

        </br>

        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        3. يقر الطالب بأنه فاهم موافق على الالتزام و الامتثال لكافة سياسات المركز و قواعده و تعليماته من تاريخ 
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        توقيعه على هذا العقد
        </p>
        </br>

        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        4. بتوقيع هذه الاتفاقية فان الطالب يوافق على دفع كافة الرسوم الدراسية المعنية سواء تم الدفع بشكل كامل أو
                </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        من خلال الأقساط
     </p>
     </br></br></br></br></br>
    </div>
    <!-- Page 4 -->
    <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                <img src="{{asset('images/logoharmonex.png')}}" width="50" height="50">
            </div>
        </div>

        <div class = "row">
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        5. يقر الطالب الملتحق بمركز هارمونكس بأنه لا يعاني من أي أمراض عقلية أو نفسية دون الالتفات لمسببات
             </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        هذه الأمراض و يقر انه لا يتعاط أي عقاقير مخدرة لأي أسباب نفسية مصرح بها أو كان مصدرها الإدمان و يقر
                    </p>

    <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
    الطالب بان إقراره يؤكد سلامته عقليا و نفسيا و بعكس ذلك يقر الطالب دون منازعة قانونية بتحمله المسؤولية
         </p>
    <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
    القانونية المدنية كانت أم جزائية و يقر بعدم ممانعة المركز بإيقاع كافة العقوبات و الإجراءات الإدارية و المالية و
        </p>
       </br</br>
       <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
       الأكاديمية كلها و- أو بعضها بحسب ما تراه مناسبا. في حال وجود أي تحديات جسمية أو عقلية للطالب الملتحق .
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        يتوجب عليه مراجعة الحالات الخاصة و تعبئة النماذج الخاصة بحالته الصحية
        </p>
       </br>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        <b>ثامنا : الآباء و الأولياء أو الأوصياء (للطلاب ما دون الثامنة عشر)</b>
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        يتحمل الشخص الموقع على هذه الاتفاقية بالنيابة عن طالب الالتحاق المسؤولية  بالتضامن و التكافل عن أية
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        رسوم و نفقات و التزامات أخرى ناشئة عن هذه الاتفاقية
        </p>
        </br>

        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
<b>تاسعا : القانون الواجب التطبيق</b>
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">

        يخضع هذا العقد في تفسيره و تأويله إلى قوانين المملكة الأردنية الهاشمية و تختص المحاكم الأردنية المختصة
                </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        حصرا بتسوية أي منازعات أو دعاوى ناشئة عن هذه الاتفاقية
        </p>
        </br>

        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        <b>عاشرا : </b>
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        حررت هذه الاتفاقية من مقدمة تعتبر جزء لا يتجزأ منها و عشر بنود بما فيه هذا البند و على نسختين موقعة بيد
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 19px;padding-right: 30px;">
        {{$student->name_ar}}   كل فريق نسخة للعمل بمقتضاها في عمان في هذا اليوم {{\Carbon\Carbon::now()->toDateString()}} الموافق
        </p>
        </br>
        

        <div class="row">
        <div class="text-right">
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 17px;padding-right: 30px;">
        شاهد ( ولي الأمر)
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 17px;padding-right: 30px;">
        الاسم :  
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 17px;padding-right: 30px;">
        التوقيع :   
        </p>

        <div class="text-left">
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 17px;padding-right: 30px;">
        الفريق الثاني  
            </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 17px;padding-right: 30px;">
        الاسم :  
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 17px;padding-right: 30px;">
        التوقيع :   
        </p>
        </div>
        </div>
        

       
       
        
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 17px;padding-right: 30px;">
        الفريق الأول            </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 17px;padding-right: 30px;">
        الاسم :  
        </p>
        <p class="text-right" dir="rtl" lang="ar" style="font-size: 17px;padding-right: 30px;">
        التوقيع :   
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
    document.location.href = '{{URL::to('create/student')}}';
}
</script>

</html>