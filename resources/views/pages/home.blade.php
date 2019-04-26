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
            <a href="#">Awards</a>
            <a href="#">Categories</a>
            <a href="#">About</a>
            <a href="#footer">Contact</a>
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
            Awards Categories
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
             be invited to nominate individuals, or organisations with an outstanding performance .
         </span>
         <span class="three">
             Finalists for each category will be chosen and required
        to submit supporting documentation for the respective selections.
         </span>
        <span class="four">
            Awards that need voting, naming etc, a specific media plan shall be developed
        and will include all media platforms with a dedicated independent website and application
        </span>
    </div>

    <div id="insurancePlayers">
        <h1 class="text-center">Key Insurance Players</h1>

        <img src="{{'images/tiba.png'}}" alt="TIBA">
        <img src="{{'images/tira.png'}}" alt="TIRA">
        <img src="{{'images/ati.png'}}" alt="ATI">
        <img src="{{'images/iit.png'}}" alt="IIT">

    </div>

    <div id="footer">


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
