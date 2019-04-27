@extends('template.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Rewarding Insurance Excellence in Tanzania
@endsection

@section('content')

    <div id="homeContent">

        <div id="landingMain">
            <p class="text-center">Welcome to the <br> Tanzania Insurance Awards <br> 2019
                <span>Rewarding Insurance Excellence in Tanzania</span>
            </p>
            <img src="{{'images/winners.svg'}}" alt="Award Winners">
            <a class="voteNow" href="/vote">
                Vote Now
            </a>
        </div>

        <div id="whatWeDo">
            <p>Identifying, Recognising <br> and Rewarding <br>
                Excellence in the Insurance Sector <br> in Tanzania
            </p>
            <img src="{{'images/identify.svg'}}" alt="What we do">
            <a class="ourJudges" href="/judges" >
                Our Judges
            </a>
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

    </div>

@endsection


