<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{'css/app.min.css'}}">
    <link rel="stylesheet" href="{{'css/fonts.css'}}">
    <link rel="stylesheet" href="{{'css/background.css'}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    @yield('stylesheets')

    <title>@yield('title')</title>
</head>
<body>

<div id="defaultContent">

    <div id="top">
        <div class="navigation">
            <a href="/"><img id="homeButton" src="{{'images/icons8-home.svg'}}" alt="Home"></a>
            <a href="/vote">VOTE</a>
            <a href="/forms">FORMS</a>
            <a href="/judges">COMMITTEE</a>
            <a href="/shortlist">SHORTLIST</a>
            <a href="/sponsors">SPONSORS</a>
            <a href="/sponsorship">SPONSORSHIP</a>
            <a href="/about">FAQs</a>
            <a href="/about">ABOUT</a>
            <a href="/contact">CONTACT</a>
            <i class="fas fa-times"></i>
            <i class="fas fa-bars"></i>
        </div>

        <a class="homeLink" href="/">
            <img src="{{'images/insurancelogo.png'}}" alt="Home">
        </a>

        <div class="dateVenue">
            <img src="{{'images/icons8-calendar.svg'}}" alt="Home">&nbsp;27<sup>th</sup> September 2019
        </div>
    </div>

    <div id="main">

        @yield('content')

    </div>

    <div id="footer">

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path fill="black" d="M0,95 0,80 9,88 Z"></path>
            <path fill="#ffeb3b" d="M0,80 0,75 14.5,88.35 11.5,91 Z"></path>
            <path fill="#15ace4" d="M0,100 0,95 100,20 100,100 Z"></path>
            <path fill="green" d="M0,75 0,10 40,65 11.75,86.3 Z" ></path>
            <path fill="#15ace4" d="M0,10 0,5 42.5,64 41,67 Z"></path>
        </svg>

        <p>Rewarding Insurance Excellence <br> in Tanzania</p>

        <p>Copyright &copy; Insurance Awards Tanzania 2019</p>

        <div class="footer-links">
            <div><a href="/vote">Vote</a></div>
            <div><a href="/forms">Forms</a></div>
            <div><a href="/contact">Contact</a></div>
        </div>

    </div>

</div>

<script async src="{{'js/app.js'}}"></script>
{{--ScrollMagic--}}
<script src="{{'js/scrollMagic2-0-6.min.js'}}"></script>
{{--GSAP--}}
<script src="{{'js/Tweenmax2-1-3.min.js'}}"></script>
<script src="{{'js/custom.js'}}"></script>
{{--jquery--}}
<script src="{{'js/jquery3-4-0.min.js'}}"></script>
<script>
    $(document).ready(function () {
        $('.fa-bars').click(function () {
            $('.navigation').addClass('showMenu')
        });
        $('.fa-times').click(function () {
            $('.navigation').removeClass('showMenu')
        })
    })
</script>

@yield('scripts')

</body>
</html>
