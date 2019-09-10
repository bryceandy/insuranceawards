@extends('layouts.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Shortlist
@endsection

@section('content')

    <div id="shortlistContent">

        <h1 class="text-center">Shortlisted Nominees</h1>

        <h3>Insurance Company of the Year</h3>

        <ul>
            <li>Sanlam Life Insurance Tanzania</li>
            <li>Alliance Insurance Corporation Limited</li>
            <li>Alliance Life Assurance Limited</li>
            <li>Jubilee Insurance Limited Company</li>
        </ul>

        <h3>Most Innovative Insurance Product</h3>

        <ul>
            <li>Jubilee Insurance Limited Company - Safari Voucher</li>
            <li>Milvik Tanzania Limited - Bima Mkononi</li>
            <li>Mgen Tanzania Insurance Company Limited - Multi-Peril Crop Insurance</li>
            <li>Acclavia Insurance Brokers - Boda Salama</li>
        </ul>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#shortlistLink').addClass('activePage')
        })

    </script>
@endsection


