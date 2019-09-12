@extends('layouts.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Rewarding Insurance Excellence in Tanzania
@endsection

@section('content')

    <div id="homeContent">

        <div id="landingMain">
            <p class="text-center">Welcome to the <br> <span style="display:block;white-space: nowrap">Tanzania Insurance Awards</span> 2019
                <span id="theme">Rewarding Insurance Excellence in Tanzania</span>
                <a href="/vote" id="vote-now">VOTE NOW</a>
            </p>
        </div>

        <div id="whatWeDo">

            <p class="whatwedo">We foster innovation and <br> encourage <br>
                creativity in the insurance sector in <br> Tanzania
            </p>

            <div class="theProcess">
                <h1>The Process</h1>
                <span class="one">
                     &xcirc; &nbsp;Categories of awards shall be agreed upon by the select committee for
                     both individuals and organisations.
                </span>
                <span class="two">
                    &xcirc; &nbsp;Professionals shall constitute the selection committee.The public shall
                    be invited to nominate individuals or firms with an outstanding performance.
                </span>
                <span class="three">
                    &xcirc; &nbsp;Finalists for each category will be chosen and required
                    to submit supporting documentation for the respective selections.
                </span>
                <span class="four">
                    &xcirc; &nbsp;For awards that need voting, a media plan shall be developed and will include
                    all media platforms .
                </span>
            </div>
        </div>

        <div id="insurancePlayers">
            <h1 class="text-center">Key Insurance Players</h1>

            <img src="{{'images/tira.png'}}" alt="TIRA">
            <img src="{{'images/tiba.png'}}" alt="TIBA">
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
                <span>2<sup>nd</sup> August 2019</span> <br>
                <span>3<sup>rd</sup> August 2019</span>
            </p>

        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#homeLink').addClass('activePage')
        })
    </script>
@endsection

