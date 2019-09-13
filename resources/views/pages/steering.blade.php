@extends('layouts.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Steering committee
@endsection

@section('content')

    <div id="steeringContent">

        <div id="steeringHeader">
            <h1 class="text-center">Steering Committee</h1>
        </div>

        <div id="steeringContainer">

            <div class="steering">
                <img src="{{'images/mussacjuma'}}" alt="Steering">
                <div class="name text-center">Dr. Mussa Juma</div>
                <div class="title text-center">Commissioner</div>
                <div class="company text-center">TIRA</div>
            </div>

            <div class="steering">
                <img src="{{'images/bugali.png'}}" alt="Steering">
                <div class="name text-center">Bosco Bugali</div>
                <div class="title text-center"></div>
                <div class="company text-center"></div>
            </div>

            <div class="steering">
                <img src="{{'images/kilumbi.jpeg'}}" alt="Steering">
                <div class="name text-center">Ernest Kilumbi</div>
                <div class="title text-center"></div>
                <div class="company text-center"></div>
            </div>

            <div class="steering">
                <img src="{{'images/jaffer.jpeg'}}" alt="Steering">
                <div class="name text-center">Mohammed Jaffer</div>
                <div class="title text-center"></div>
                <div class="company text-center"></div>
            </div>

            <div class="steering">
                <img src="{{'images/brown.jpeg'}}" alt="Steering">
                <div class="name text-center">Elizabeth Brown</div>
                <div class="title text-center"></div>
                <div class="company text-center"></div>
            </div>

        </div>

    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#committee').addClass('activePage')
        })

    </script>
@endsection


