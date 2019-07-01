@extends('layouts.nomination')

@section('title')
    The Tanzania Insurance Awards 2019 - {{$titleName}} Nomination
@endsection

@section('content')

    <div id="nominationContent">

        <h1 class="text-center">{{$titleName}}</h1>

        <p>
            <b>This Award is open to any insurer, broker or Loss Adjuster. The judges will be looking for entries that:</b> <br> <br>
            Reward registrants that have behaved ethically and contributed to economic development while improving the quality of life of the workforce and their families as well as the local community and society at large e.g. contributing to pollution/environmental management, provision of clinics, disaster responsiveness, scholarships to deserving insurance candidates etc <br> <br>

            <b>It will be particularly important to demonstrate the achievement of results against targets. </b> <br> <br>
            • Reward companies who have contributed through Corporate Social Responsibility (CSR) e.g. building schools, helping in times of natural disasters, provision of scholarships to deserving insurance candidates, etc.

        </p>

    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#nominationLink').addClass('activePage')
        })

    </script>
@endsection


