@extends('admin.layouts.header')
@section('page_name')
    Course Information
@endsection
@section('content')

    <div class="card text-center">
        <div class="card-header" style="font-family: cursive;">
           Hardware Course
        </div>
        <div class="card-body">
            <h5 class="card-title" >دورة صيانة الأجهزة الخلوية </h5>
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">مده الدوره</th>
                    <th scope="col">عدد الساعات</th>
                    <th scope="col">عدد محاضرات الاسبوعيه</th>
                    <th scope="col">مده المحاضره الواحده</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>5 أسابيع</td>
                    <td>30 ساعة</td>
                    <td>2 محاضرة</td>
                    <td>3 ساعات</td>
                </tr>

                </tbody>
            </table>

            <p class="card-text">تكلفة الدورة 400 دينار( لكن يتم إعطاء خصم 25% عند أخذ الطالب لدورتين فأكثر).
            </p>
            <p class="card-text">ما يجب على الطالب معرفته عند الإنتهاء من دورة صيانة الأجهزة:
            </p>
            <ul class="-list-ul" >
                <li>معرفة قطع الهواتف الداخلية والخارجية، مثل: السماعة، المايك، الأيسيات الداخلية</li>
                <li>تعلم كيفية تحديد أعطال الهواتف وتشخيصها</li>
                <li>مكين الطالب من إصلاح الأعطال بعد تعلم آلية تحديدها</li>
                <li>
                    تعلم كيفية إستبدال القطع البسيطة، مثل: الشاشة، البطارية، السماعة
                </li>
                <li>
                    تعلم كيفية إستبدال القطع الصعبة، مثل: ايسيات الجهاز بشكل عام
                </li>
                <li>
                    تعلم كيفية صيانة الجهاز من أضرار السوائل والتحطمات الشديدة
                </li>
                <li>
                    تعلم آلية إخراج البيانات في حال عدم القدرة على إصلاح الجهاز
                </li>
            </ul>
        </div>

    </div>


    <div class="card text-center">
        <div class="card-header" style="font-family: cursive;">
            Software Course
        </div>
        <div class="card-body">
            <h5 class="card-title" >دورة صيانة الأجهزة الخلوية </h5>
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">مده الدوره</th>
                    <th scope="col">عدد الساعات</th>
                    <th scope="col">عدد محاضرات الاسبوعيه</th>
                    <th scope="col">مده المحاضره الواحده</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>5 أسابيع</td>
                    <td>30 ساعة</td>
                    <td>2 محاضرة</td>
                    <td>3 ساعات</td>
                </tr>

                </tbody>
            </table>

            <p class="card-text">ما يجب على الطالب معرفته عند الإنتهاء من دورة برمجة الأجهزة الخلوية
            </p>
            <p class="card-text">ما يجب على الطالب معرفته عند الإنتهاء من دورة صيانة الأجهزة:
            </p>
            <ul class="-list-ul" >
                <li>تعلم آلية فك شيفرات الأجهزة الخلوية بإستخدام أجهزة محددة</li>
                <li>تعلم طرق استخدام سيرفرات الهواتف</li>
                <li>تعلم كيفية فك شيفرة الايكلاود لأجهزة ابل</li>
                <li>
                    تعلم كيفية فك شيفرات الجي ميل لأجهزة الأندرويد
                </li>
                <li>
                    إعادة برمجة الأجهزة وإعادة ضبطها
                </li>
            </ul>
        </div>

    </div>

    <div class="card text-center">
        <div class="card-header" style="font-family: cursive;">
            Screen Glass Replacement
        </div>
        <div class="card-body">
            <h5 class="card-title" >دورة إعادة تدوير الشاشات  </h5>
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">مده الدوره</th>
                    <th scope="col">عدد الساعات</th>
                    <th scope="col">عدد محاضرات الاسبوعيه</th>
                    <th scope="col">مده المحاضره الواحده</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>5 أسابيع</td>
                    <td>18 ساعة</td>
                    <td>2 محاضرة</td>
                    <td>3 ساعات</td>
                </tr>

                </tbody>
            </table>

            <p class="card-text">ما يجب على الطالب معرفته عند الإنتهاء من دورة إعادة تدوير الشاشات
            </p>
            <p class="card-text">تعلم آلية فصل الزجاج الخارجي للشاشات المدمجة والمتضرر زجاجها فقط
            </p>
            <ul class="-list-ul" >
                <li>تعلم آلية الفصل بالحرارة</li>
                <li>تعلم آلية الفصل بالتجميد</li>
                <li>تعلم آلية الفصل بالليزر</li>

            </ul>
        </div>

    </div>
@endsection
