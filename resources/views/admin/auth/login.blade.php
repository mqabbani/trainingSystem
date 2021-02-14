<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Transparent Login Form with Blur Background</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }

    body:before {
        content: '';
        position: fixed;
        width: 100vw;
        height: 100vh;
        background-image: url(https://i.postimg.cc/8cf6v1rk/1.jpg);
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        -webkit-background-size: cover;
        background-size: cover;
        -webkit-filter: blur(10px);
        -moz-filter: blur(10px);
        filter: blur(10px);
    }

    .contact-form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        height: 350px;
        padding: 80px 40px;
        background: rgba(0, 0, 0, 0.5);
    }

    .avatar {
        position: absolute;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        overflow: hidden;
        top: calc(-80px/2);
        left: 190px;
    }

    .contact-form h2 {
        margin: 0;
        padding: 0 0 20px;
        color: #fff;
        text-align: center;
        text-transform: uppercase;
    }

    .contact-form p {
        margin: 0;
        padding: 0;
        font-weight: bold;
        color: #fff;
    }

    .contact-form input {
        width: 100%;
        margin-bottom: 20px;
    }

    .contact-form input[type=email],
    .contact-form input[type=password] {
        border: none;
        border-bottom: 1px solid #fff;
        background: transparent;
        outline: none;
        height: 40px;
        color: #fff;
        font-size: 16px;
    }

    .contact-form input[type=submit] {
        height: 30px;
        color: #fff;
        font-size: 15px;
        background: red;
        cursor: pointer;
        border-radius: 25px;
        border: none;
        outline: none;
        margin-top: 15%;
    }

    .contact-form a {
        color: #fff;
        font-size: 14px;
        font-weight: bold;
        text-decoration: none;
    }

    input[type=checkbox] {
        width: 20%;
    }
    </style>
</head>

<body>
    <div class="contact-form">
        <img alt="" class="avatar" src="{{asset('images/a1.jpg')}}">
        <h2>Harmonex Training Center</h2>
        <form method="POST" action="{{ route('login') }}">
             @csrf
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password" required autocomplete="current-password">
                <input type="submit" value="Sign in">
        </form>
    </div>
</body>

</html>