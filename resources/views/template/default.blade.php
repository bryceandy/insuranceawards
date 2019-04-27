<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{'css/app.min.css'}}">
    <link rel="stylesheet" href="{{'css/fonts.css'}}">

    <title>@yield('title')</title>
</head>
<body>

<div id="defaultContent">

    <div id="top">
        <div class="navigation">
            <a href="/judges">Judges</a>
            <a href="/forms">Forms</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>

        <a class="homeLink" href="/">
            <img src="{{'images/insurancelogo.png'}}" alt="Home">
        </a>
    </div>

    <div id="main">

        @yield('content')

    </div>

    <div id="footer">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path fill="#15ace4" d="M0,95 0,100 100,20 100,15 Z"></path>
            <path fill="black" d="M0,95 0,80 9,88 Z"></path>
            <path fill="#ffeb3b" d="M0,80 0,75 14.5,88.35 11.5,91 Z"></path>
            <path fill="green" d="M0,75 0,10 40,63.2 11.65,85.7 Z" ></path>
            <path fill="#15ace4" d="M0,10 0,5 42.5,64 41,67 Z"></path>
        </svg>

        <p>Rewarding Insurance Excellence <br> in Tanzania</p>

        <p>Copyright &copy; Insurance Awards Tanzania 2019</p>

        <div class="footer-links">
            <div><a href="/about">About</a></div>
            <div><a href="/forms">Forms</a></div>
            <div><a href="/contact">Contact</a></div>
        </div>

    </div>

</div>

<script async src="{{'js/app.js'}}"></script>

@yield('scripts')

</body>
</html>
