<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Print Invoice</title>
</head>
<body>
<div class="card">
    <h5 class="card-header" style="text-align: end;">فاتوره من شركه الالحان للهواتف الخلويه</h5>
    <div class="card-body">
        <h6 style="text-align: end">اسم الطالب :{{$student->name_ar}}  </h6>
        <p class="card-text" style="text-align: end">المبلغ المدفوع  : {{$course->price}}</p>
        <p class="card-text" style="text-align: end">   {{$course->name}} : المبلغ المدفوع مقابل دوره اسم  </p>
        <p class="card-text" style="text-align: end">   {{$course->session}}    :رقم الدوره  </p>
    </div>
</div>


</body>
</html>
