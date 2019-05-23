@extends('template.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Nomination Forms
@endsection

@section('content')

    <div id="formsContent">

        <h1 class="text-center">Nomination Forms for all Categories</h1>

        <ul>
            <li>
                Insurance Company of the Year &nbsp;<a href="download/insurance-company-of-the-year">DOWNLOAD</a>
            </li>
            <li>
                Most Innovative Insurance Product &nbsp;<a href="download/miip">DOWNLOAD</a>
            </li>
            <li>
                Young Achievers' Award - Ideas/Research, Development &nbsp;<a href="download/yaa-ideas-research-development">DOWNLOAD</a>
            </li>
            <li>
                Young Achievers' Award - Entrepreneurship &nbsp;<a href="download/yaa-entrepreneurship">DOWNLOAD</a>
            </li>
            <li>
                Insurance Brokerage of the Year &nbsp;<a href="download/insurance-brokerage-of-the-year">DOWNLOAD</a>
            </li>
            <li>
                Insurance Awareness Campaign of the Year &nbsp;<a href="download/insurance-awareness-campaign-of-the-year">DOWNLOAD</a>
            </li>
            <li>
                Corporate Social Responsibility Award &nbsp;<a href="download/corporate-social-responsibility-award">DOWNLOAD</a>
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


