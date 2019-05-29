@extends('template.nomination')

@section('title')
    The Tanzania Insurance Awards 2019 - {{$titleName}} Nomination
@endsection

@section('content')

    <div id="nominationContent">

        <h1 class="text-center">{{$titleName}}</h1>

        <p>
            <b>This Award shall go to the insurance entity that has effective media campaigns on insurance matters.</b> <br> <br>
            <b>The Judges will:</b> <br> <br>

            a) Reward registrants that have had successful insurance education and public relations campaigns though road shows, media and exhibition (with evidence of impact) <br>
            b) Promotion of insurance products and benefits derived from insurance and risk management <br> <br>

            <b>NB. Please include the following in your submission: </b> <br> <br>
            • High resolution company logo <br>
            • Strategic company goals <br>
            • Results and outcomes <br>
            • Testimonials

        </p>

    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#nominationLink').addClass('activePage')
        })

    </script>
@endsection


