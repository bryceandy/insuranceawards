@extends('layouts.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Shortlist
@endsection

@section('content')

    <div id="shortlistContent" style="padding: 5vw; background: #ffffff">

        <img src="{{'images/comingsoon.png'}}" alt="Comming Soon" style="width:90vw; height: auto; display: block">
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#shortlistLink').addClass('activePage')
        })

    </script>
@endsection


