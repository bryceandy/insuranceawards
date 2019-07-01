@extends('layouts.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Secretariat
@endsection

@section('content')

    <div id="secretariatContent">

        <h1 class="text-center">Secretariat</h1>
        <img src="{{'images/glow.png'}}" alt="Glow Consulting Services" id="glow">

        <h4 class="text-center">GLOW CONSULTING SERVICES</h4>
        <p class="text-center">
            "Changing the face of business communication."
        </p>

        <p class="text-center" style="color: #15ace4">Plot No. 954 | Katoke Road, Oysterbay | P.O Box 105508 DSM <br>
            +255 757 372363 <br>
            glowconsults@gmail.com <br>
        </p>

    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#committee').addClass('activePage')
        })

    </script>
@endsection


