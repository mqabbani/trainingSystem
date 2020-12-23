
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box
    }

    body {
        font-family: 'Open Sans', sans-serif;
        background: #eee
    }

    .wrapper {
        max-width: 600px;
        margin: 20px auto
    }

    .content {
        padding: 20px;
        padding-bottom: 50px
    }

    a:hover {
        text-decoration: none
    }

    a,
    span {
        font-size: 15px;
        font-weight: 600;
        color: rgb(50, 141, 245);
        padding-bottom: 30px
    }

    p.text-muted {
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 5px
    }

    b {
        font-size: 15px;
        font-weight: bolder
    }

    .option {
        display: block;
        height: 50px;
        background-color: #f4f4f4;
        position: relative;
        width: 100%
    }

    .option:hover {
        background-color: #e8e8e8;
        cursor: pointer
    }

    .option input {
        position: absolute;
        opacity: 0;
        cursor: pointer
    }

    .checkmark,
    .crossmark {
        position: absolute;
        top: 10px;
        right: 10px;
        height: 22px;
        width: 22px;
        background-color: #f4f4f4;
        border-radius: 2px;
        padding: 0
    }

    .option:hover input~.checkmark,
    .option:hover input~.crossmark {
        background-color: #e8e8e8
    }

    .option input:checked~.checkmark {
        background-color: #79d70f
    }

    .option input:checked~.crossmark {
        background-color: #ec3838
    }

    .checkmark:after,
    .crossmark:after {
        content: "\2714";
        position: absolute;
        background-color: #79d70f;
        display: none;
        color: #fff;
        padding-left: 4px;
        width: 22px;
        font-size: 16px
    }

    .crossmark:after {
        content: "\2715";
        background-color: #ec3838
    }

    .option input:checked~.checkmark:after,
    .option input:checked~.crossmark:after {
        display: block;
        transition: 100ms ease-out 1s
    }

    p.mb-4 {
        border-left: 3px solid green
    }

    p.my-2 {
        border-left: 3px solid red
    }

    input[type="submit"] {
        width: 100%;
        height: 50px;
        background-color: #229aeb;
        border: none;
        outline: none;
        color: #fff;
        font-weight: 600;
        cursor: pointer
    }

    input[type="submit"]:hover:focus {
        border: none;
        outline: none;
        background-color: #229bebad
    }
</style>
<body  onload="window.print()">
<div class="wrapper bg-white rounded" id="btnprn">
    <p class="text-muted">Student Name :</p>
    <p class="text-muted">Student Sp :</p>

    <p class="text-muted">Multiple Choice Questions</p>
    @foreach($questions as $value)
        <p class="text-justify h5 pb-2 font-weight-bold">{{$value->text}}</p>
        <div class="form-layout">
            <div class="row mg-b-25">
                <div class="col-lg-12">
                    <div class="form-group">
                        <input class="form-control" type="radio"> {{$value->answer1}} &nbsp;
                        <input class="form-control" type="radio"> {{$value->answer2}}&nbsp;
                        <input class="form-control" type="radio"> {{$value->answer3}}&nbsp;
                        <input class="form-control" type="radio"> {{$value->answer4}}&nbsp;
                    </div>
                </div><!-- col-4 -->

        </div><!-- form-layout -->
    @endforeach
</div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function (){
        setTimeout(15000);
        document.location.href = '{{URL::to('print/exam')}}';
    });
</script>
