<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SFCS</title>
    <link rel="shortcut icon" href="">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-image: url('Wallpaper.jpg');
            background-position: center;
            /* background-color: #fff; */
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 10php0vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .border-background {
            width: 160px;
            height: 80px;
            background: #D2691E;
            border-radius: 40px;
            margin: auto;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}" style="font-size:20px; color:white">Home</a>
            @else
            <a href="{{ route('login') }}" style="font-size:20px;color:white">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" style="font-size:20px">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <!-- <div class="content">
            <div class="title m-b-md">
                Smart Food Court System
            </div>
        </div> -->
    </div>
</body>

</html>