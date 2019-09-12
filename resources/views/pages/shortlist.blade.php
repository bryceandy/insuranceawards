@extends('layouts.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Shortlist
@endsection

@section('content')

    <div id="shortlistContent">

        <h1 class="text-center">Selected Nominees Shortlisted for the Voting Process</h1>

        <p class="text-left">
            After an extensive analysis between the judges on deciding the successful applicants,
            we are glad to announce the following companies that will participate in the open voting
            for two categories
        </p>

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

        <h1 class="text-center">Selected Nominees in the Categories That DO NOT Require Voting</h1>

        <h3>Corporate Social Responsibilities Award</h3>

        <ul>
            <li>Jubilee Life Insurance Corporation of Tanzania Limited</li>
            <li>Metropolitan Tanzania Insurance Company Limited</li>
            <li>Jubilee Insurance Limited Company</li>
            <li>Sanlam Life Insurance Tanzania</li>
            <li>Alliance Insurance Corporation Limited</li>
            <li>Phoenix of Tanzania Assurance Company Limited</li>
            <li>National Insurance Corporation of Tanzania Limited</li>
        </ul>

        <h3>Insurance Brokerage of the Year</h3>

        <ul>
            <li>FBN Insurance Brokers Limited</li>
            <li>Acclavia Insurance Brokers</li>
        </ul>

        <h3>Insurance Awareness Campaign of the Year</h3>

        <ul>
            <li>Micro Health Initiative</li>
            <li>Jubilee Insurance Limited Company</li>
            <li>Goose Africa Insurance Service Limited</li>
            <li>Phoenix of Tanzania Assurance Company Limited</li>
            <li>Milvik Tanzania Limited</li>
            <li>BRITAM Insurance Tanzania Limited</li>
            <li>National Insurance Corporation of Tanzania Limited</li>
            <li>Acclavia Insurance Brokers</li>
        </ul>

        <h3>Young Achievers Entrepreneurship</h3>

        <ul>
            <li>Imatic Technologies Limted (Smart Policy)</li>
            <li>Salvatory Kasuga (Smart Pay)</li>
            <li>Richcollins Burton Kweka</li>
        </ul>

        <h3>Young Achievers Research, Development and Ideas</h3>

        <ul>
            <li>Bima Tech</li>
            <li>Salum Ismail Mlaponi</li>
            <li>Robin Vedasto Rwegoshora</li>
            <li>ADR Team</li>
            <li>Ledwina Daudi Msangi</li>
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


