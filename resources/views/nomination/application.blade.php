@extends('template.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Application for Nomination
@endsection

@section('content')

    <div id="applicationContent">

        <form action="/apply">
            @csrf
            <h1 class="text-center">Application Form</h1>
        </form>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#nominationLink').addClass('activePage')
        })

    </script>
@endsection


