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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    @yield('stylesheets')

<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-141273597-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-141273597-1');
    </script>

    <title>@yield('title')</title>
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="defaultContent">

    <div id="top">
        <div class="navigation">
            <a href="/" class="navlinks" id="homeLink"><img id="homeButton" src="{{'images/icons8-home.svg'}}" alt="Home"></a>
            <a href="/vote" class="navlinks" id="voteLink">VOTE</a>
            <div href="#" class="navlinks" id="nominationLink">
                NOMINATION
                <div class="nominationBlock">
                    <a href="/nomination-guidelines">Guidelines</a>
                    <a href="/application-form">Application Forms</a>
                </div>
            </div>
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
            <img src="{{'images/insurancelogo.png'}}" alt="Home">
        </a>

        <div class="dateVenue">
            <img src="{{'images/icons8-calendar.svg'}}" alt="Home">&nbsp;26<sup>th</sup> September 2019
        </div>
    </div>

    <div id="main">

        @yield('content')

    </div>

    <div id="footer">

        <hr style="width: 90vw; border-top-color: darkgrey; margin-top: 0; margin-bottom: 0">
        {{--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">--}}
            {{--<path fill="black" d="M0,95 0,80 9,88 Z"></path>--}}
            {{--<path fill="#ffeb3b" d="M0,80 0,75 14.5,88.35 11.5,91 Z"></path>--}}
            {{--<path fill="#15ace4" d="M0,100 0,95 100,20 100,100 Z"></path>--}}
            {{--<path fill="green" d="M0,75 0,10 40,65 11.75,86.3 Z" ></path>--}}
            {{--<path fill="#15ace4" d="M0,10 0,5 42.5,64 41,67 Z"></path>--}}
            {{--<text x="40" y="10" class="svgText">Rewarding Insurance Excellence</text>--}}
            {{--<text x="60" y="18" class="svgText">in Tanzania</text>--}}
        {{--</svg>--}}

        <div id="companyContacts">
            <img src="{{'images/tira.png'}}" class="logo" alt="TIRA">
            <div class="contactInfo">
                LAPF Building, 5th floor, <br>
                Plot No. 4/5, Makole street,
                P. O. Box 2987, Dodoma.<br>
                Tel: +255(026)2321180 <br>
                Email: coi@tira.go.tz <br>
                Website: www.tira.go.tz <br>
            </div>
            <img src="{{'images/iit.png'}}" class="logo" alt="IIT">
            <div class="contactInfo">
                3rd Floor,Maktaba Complex Building,<br>
                Along Bibi Titi Mohammed Road<br>
                P.O.BOX 4977,Dar es Salaam. <br>
                Phone: +255 215 0702<br>
                Email: info@iit.co.tz
            </div>
        </div>

        <div id="socialFooter">
            <hr style="border-top-color: darkgrey; width: 90%; margin-top: -1rem; padding-bottom: 1rem">
            <a href="/" style="float: left; margin-left: 5vw">Tanzania Insurance Awards 2019</a>
            <a href="https://www.instagram.com/bimaawards/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/bimaawards?lang=en" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>

    </div>

</div>

<script async src="{{'js/app.js'}}"></script>

{{--jquery--}}
<script src="{{'js/jquery3-4-0.min.js'}}"></script>
{{--GSAP--}}
<script src="{{'js/Tweenmax2-1-3.min.js'}}"></script>
{{--ScrollMagic--}}
<script src="{{'js/scrollMagic2-0-6.min.js'}}"></script>
{{--ScrollMagic-GSAP-animation--}}
<script src="{{'js/scrollMagic-plugin-gsap-animation.js'}}"></script>
{{--GSAP scrollTo--}}
<script src="{{'js/gsap-scrollTo.min.js'}}"></script>

<script src="{{'js/custom.js'}}"></script>

@yield('scripts')

</body>
</html>
