@extends('template.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Nomination Forms
@endsection

@section('content')

    <div id="formsContent">

        <h1 class="text-center">Nomination Forms for all Categories</h1>

        <ul>
            <li>
                <a href="forms/insurance-company-of-the-year">Insurance Company of the Year</a>
            </li>
            <li>
                <a href="forms/most-innovative-insurance-product">Most Innovative Insurance Product</a>
            </li>
            <li>
                <a href="forms/young-achievers-award-development">Young Achievers' Award - Ideas/Research, Development</a>
            </li>
            <li>
                <a href="forms/young-achievers-award-entrepreneurship">Young Achievers' Award - Entrepreneurship</a>
            </li>
            <li>
                <a href="forms/insurance-brokerage-of-the-year">Insurance Brokerage of the Year</a>
            </li>
            <li>
                <a href="forms/insurance-awareness-campaign-of-the-year">Insurance Awareness Campaign of the Year</a>
            </li>
            <li>
                <a href="forms/corporate-social-responsibility-award">Corporate Social Responsibility Award</a>
            </li>
        </ul>

    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#formsLink').addClass('activePage')
        })

    </script>
@endsection


