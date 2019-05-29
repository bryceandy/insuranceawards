@extends('template.nomination')

@section('title')
    The Tanzania Insurance Awards 2019 - {{$titleName}} Nomination
@endsection

@section('content')

    <div id="nominationContent">

        <h1 class="text-center">{{$titleName}}</h1>

        <p>
            <b>This Award is open to all Tanzania Insurance Regulatory Authority (TIRA) registered companies serving commercial and personal lines markets. Only companies who conduct business in Tanzania shall be eligible to participate.</b> <br> <br>
            All interested companies are hereby requested to submit the following documentation in their preferred format. (audio-visual or print).<br> <br>


            1. Describe, with credible evidence, how technology or any other innovation has enabled growth and customer retention in your organisation.<br>
            2. Explain in not more than 1000 words why you deserve Most Innovative Insurance Product of the Year Award.<br><br>

            <b>The Judges will be looking for:</b> <br> <br>

            a) Reward companies that have successfully piloted, rolled out and scaled up innovative inclusive products. <br>
            b) The companies with vast coverage and point of sale (80%) of the country) in terms of branches, sales point, agencies and alternative distributors.<br>
            c) Technologically innovated to penetrate the under-served/rural sectors of the community through the provision of affordable, accessible and human centered design solutions through micro-insurance, agriculture insurance, mobile insurance (including easy payment options).<br><br>

            <b> NB. Please include the following in your submission</b> <br> <br>
            • High resolution company logo <br>
            • Strategic company goals <br>
            • Results and outcomes <br>
            • Testimonials

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


