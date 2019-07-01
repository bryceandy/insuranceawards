@extends('layouts.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Sponsorship
@endsection

@section('content')

    <div id="sponsorshipContent" style="padding: 5vw; background: #ffffff">

        <img src="{{'images/comingsoon.png'}}" alt="Comming Soon" style="width:90vw; height: auto; display: block">
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#sponsor').addClass('activePage')
        })

    </script>
@endsection


