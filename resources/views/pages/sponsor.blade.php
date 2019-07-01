@extends('layouts.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Award Sponsors
@endsection

@section('content')

    <div id="sponsorContent">

        <h1 class="text-center">Our Sponsors</h1>

        <div class="sponsors">
            <img src="{{'images/tira.png'}}" alt="TIRA">
            <img src="{{'images/zepre.png'}}" alt="ZEP-RE">
            <img src="{{'images/tanre.png'}}" alt="TAN-RE">
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#sponsor').addClass('activePage')
        })

    </script>
@endsection

