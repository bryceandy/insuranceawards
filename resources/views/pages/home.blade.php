<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{'css/app.min.css'}}">
    <link rel="stylesheet" href="{{'css/fonts.css'}}">

    <title>The Tanzania Insurance Awards 2019 - Identifying, Recognising and Rewarding
        Excellence in the Insurance Sector in Tanzania</title>
</head>
<body>

<div id="homeContent">

    <div id="landingTop">
        <div class="navigation">
            <a href="/awards">Awards</a>
            <a href="/categories">Categories</a>
            <a href="/about">About</a>
            <a href="/about">Contact</a>
        </div>

        <a class="homeLink" href="/">
            <img src="{{'images/insurancelogo.png'}}" alt="Home">
        </a>
    </div>

    <div id="landingMain">
        <p class="text-center">Welcome to the <br> Tanzania Insurance Awards <br> 2019</p>
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
    </div>

    <div id="howWeDoIt">
        A set of categories of awards shall be agreed upon by the select committee for
        both individuals and organisations. <br>
        Professionals, former CEOs, academia, and other respected industry players
        shall constitute the selection committee. The public shall be invited to
        nominate companies, individuals, or organisations whose performance was
        outstanding in a particular period. <br>
        After nominations, finalists for each category will be chosen and required
        to submit supporting documentation (write-ups, photos or videos) for the
        respective selections. <br>
        For awards that need public participation, e.g. voting, naming etc, a specific
        360 degrees media plan shall be developed and shall include traditional media,
        alternative media, all online media platforms with a dedicated independent
        website and application
    </div>

    <div id="insurancePlayers">
        <p class="text-center">Key Insurance Players</p>

        <img src="{{'images/tiba.png'}}" alt="TIBA">
        <img src="{{'images/tira.png'}}" alt="TIRA">
        <img src="{{'images/ati.png'}}" alt="ATI">
        <img src="{{'images/iit.png'}}" alt="IIT">

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
        }
        // start scrolling
        scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
    }
</script>

</body>
</html>
