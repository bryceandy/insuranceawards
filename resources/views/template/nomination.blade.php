<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{'../css/app.min.css'}}">
    <link rel="stylesheet" href="{{'../css/fonts.css'}}">
    <link rel="stylesheet" href="{{'../css/background.css'}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    @yield('stylesheets')

    <title>@yield('title')</title>
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="defaultContent">

    <div id="top">
        <div class="navigation">
            <a href="/" class="navlinks" id="homeLink"><img id="homeButton" src="{{'../images/icons8-home.svg'}}" alt="Home"></a>
            <a href="/vote" class="navlinks" id="voteLink">VOTE</a>
            <a href="#" class="navlinks" id="nominationLink">
                NOMINATION
                <div class="nominationBlock">
                    <a href="/nomination-categories">Categories</a>
                    <a href="/application-form">Application Form</a>
                </div>
            </a>
            <div href="#" class="navlinks" id="committee">
                COMMITTEE
                <div class="committeeBlock">
                    <a href="/steering" id="steeringLink">Steering - Committee</a>
                    <a href="/judges" id="judgesLink">Judges</a>
                    <a href="/secretariat" id="secretariatLink">Secretariat</a>
                </div>
            </div>
            <a href="/shortlist" class="navlinks" id="shortlistLink">SHORTLIST</a>
            <div href="#" class="navlinks" id="sponsor">
                SPONSOR
                <div class="sponsorBlock">
                    <a href="/sponsor" id="sponsorsLink">Sponsors - 2019</a>
                    <a href="/sponsorship" id="sponsorshipLink">Sponsorship</a>
                </div>
            </div>
            <a href="/faqs" class="navlinks" id="faqsLink">FAQs</a>
            <a href="/about" class="navlinks" id="aboutLink">ABOUT</a>
            <a href="/contact" class="navlinks" id="contactLink">CONTACT</a>
            <i class="fas fa-times"></i>
            <span class="menuButton">Menu <i class="fas fa-bars"></i></span>
        </div>

        <a class="homeLink" href="/">
            <img src="{{'../images/insurancelogo.png'}}" alt="Home">
        </a>

        <div class="dateVenue">
            <img src="{{'../images/icons8-calendar.svg'}}" alt="Home">&nbsp;27<sup>th</sup> September 2019
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
            <text x="40" y="10" class="svgText">Rewarding Insurance Excellence</text>
            <text x="60" y="18" class="svgText">in Tanzania</text>
        </svg>

        <div id="companyContacts">
            <p><img src="{{'../images/location.svg'}}" alt="">Plot No. 954 | Katoke Road, Oysterbay <img src="{{'../images/mail.svg'}}" alt="">P.O Box 105508 DSM</p>
            <p><img src="{{'../images/telephone.svg'}}" alt="">+255 757 372363</p>
            <p><img src="{{'../images/globe.svg'}}" alt="">glowconsults@gmail.com</p>
        </div>

    </div>

</div>

<script async src="{{'../js/app.js'}}"></script>

{{--jquery--}}
<script src="{{'../js/jquery3-4-0.min.js'}}"></script>
{{--GSAP--}}
<script src="{{'../js/Tweenmax2-1-3.min.js'}}"></script>
{{--ScrollMagic--}}
<script src="{{'../js/scrollMagic2-0-6.min.js'}}"></script>
{{--ScrollMagic-GSAP-animation--}}
<script src="{{'../js/scrollMagic-plugin-gsap-animation.js'}}"></script>

<script src="{{'../js/custom.js'}}"></script>

@yield('scripts')

</body>
</html>
