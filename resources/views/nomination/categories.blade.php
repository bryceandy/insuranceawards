@extends('template.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Nomination Categories
@endsection

@section('content')

    <div id="categoriesContent">

        <h1 class="text-center">Nomination Guidelines for all Categories</h1>

        <ul>
            <li>
                <a href="nomination-categories/insurance-company-of-the-year">Insurance Company of the Year</a>
            </li>
            <li>
                <a href="nomination-categories/most-innovative-insurance-product">Most Innovative Insurance Product</a>
            </li>
            <li>
                <a href="nomination-categories/young-achievers-award-development">Young Achievers' Award - Ideas/Research, Development</a>
            </li>
            <li>
                <a href="nomination-categories/young-achievers-award-entrepreneurship">Young Achievers' Award - Entrepreneurship</a>
            </li>
            <li>
                <a href="nomination-categories/insurance-brokerage-of-the-year">Insurance Brokerage of the Year</a>
            </li>
            <li>
                <a href="nomination-categories/insurance-awareness-campaign-of-the-year">Insurance Awareness Campaign of the Year</a>
            </li>
            <li>
                <a href="nomination-categories/corporate-social-responsibility-award">Corporate Social Responsibility Award</a>
            </li>
        </ul>

    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#nominationLink').addClass('activePage')
        })

    </script>
@endsection


