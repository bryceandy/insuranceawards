<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{'css/app.min.css'}}">
    <link rel="stylesheet" href="{{'css/fonts.css'}}">

    <title>The Tanzania Insurance Awards 2019 - Rewarding Insurance Excellence in Tanzania</title>
</head>
<body>

<div id="homeContent">

    <div id="landingTop">
        <div class="navigation">
            <a href="/awards">Awards</a>
            <a href="/judges">Judges</a>
            <a href="/forms">Forms</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>

        <a class="homeLink" href="/">
            <img src="{{'images/insurancelogo.png'}}" alt="Home">
        </a>
    </div>

    <div id="landingMain">
        <p class="text-center">Welcome to the <br> Tanzania Insurance Awards <br> 2019
            <span>Rewarding Insurance Excellence in Tanzania</span>
        </p>
        <img src="{{'images/winners.svg'}}" alt="Award Winners">
        <div class="discoverMore" onclick="smoothScroll(document.getElementById('whatWeDo'))">
            Discover More
        </div>
    </div>

    <div id="whatWeDo">
        <p>Identifying, Recognising <br> and Rewarding <br>
            Excellence in the Insurance Sector <br> in Tanzania
        </p>
        <img src="{{'images/identify.svg'}}" alt="What we do">
        <div class="viewCategories" >
            Award Categories
        </div>
    </div>

    <div id="howWeDoIt">
        <h1>The Process</h1>

        <img src="{{'images/outputlogodark.png'}}" alt="">
        
         <span class="one">
             Categories of awards shall be agreed upon by the select committee for
        both individuals and organisations.
         </span>
         <span class="two">
             Professionals shall constitute the selection committee.The public shall
             be invited to nominate individuals or firms with an outstanding performance.
         </span>
         <span class="three">
             Finalists for each category will be chosen and required
        to submit supporting documentation for the respective selections.
         </span>
        <span class="four">
            For awards that need voting a media plan shall be developed and will include
         all media platforms with a dedicated independent website and application
        </span>
    </div>

    <div id="insurancePlayers">
        <h1 class="text-center">Key Insurance Players</h1>

        <img src="{{'images/tiba.png'}}" alt="TIBA">
        <img src="{{'images/tira.png'}}" alt="TIRA">
        <img src="{{'images/ati.png'}}" alt="ATI">
        <img src="{{'images/iit.png'}}" alt="IIT">

    </div>

    <div id="dates">

        <h1>Presentation Dates</h1>
        <p>
            After receiving all the submissions, a shortlist of the selected companies from the judges
            will be made. These firms will be expected to make presentations on specific dates to the
            panel of the Insurance Awards Judges. <br><br>
            <b>No entry fees shall be applicable to any category this year, 2019.</b>
            <br><br>
            If you are entering more than one category, please note multiple entries do not need to be
            submitted at the same time. All entries must be registered from the same accounts.
            <br>
            <span>Dates</span><br>
            <b>2<sup>nd</sup> August 2019</b> <br>
            <b>3<sup>rd</sup> August 2019</b>
        </p>

        <button class="moreInfo">
            <a href="/contact">More Info</a>
        </button>

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
            <div><a href="/awards">Awards</a></div>
            <div><a href="/forms">Forms</a></div>
            <div><a href="/contact">Contact</a></div>
        </div>

    </div>

</div>

<script async src="{{'js/app.js'}}"></script>
<script async type="text/javascript">
    window.smoothScroll = function(target) {
        var scrollContainer = target;
        do { //find scroll container
            scrollContainer = scrollContainer.parentNode;
            if (!scrollContainer) return;
            scrollContainer.scrollTop += 1;
        } while (scrollContainer.scrollTop == 0);

        var targetY = 0;
        do { //find the top of target relatively to the container
            if (target == scrollContainer) break;
            targetY += target.offsetTop;
        } while (target = target.offsetParent);

        scroll = function(c, a, b, i) {
            i++; if (i > 30) return;
            c.scrollTop = a + (b - a) / 30 * i;
            setTimeout(function(){ scroll(c, a, b, i); }, 20);
        };
        // start scrolling
        scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
    }
</script>

</body>
</html>
