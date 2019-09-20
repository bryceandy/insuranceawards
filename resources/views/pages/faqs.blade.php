@extends('layouts.default')

@section('title')
    The Tanzania Insurance Awards 2019 - FAQs
@endsection

@section('content')

    <div id="faqsContent">

        <h1 class="text-center">Frequently Asked Questions</h1>

        <div class="question" id="question1">
            1. How can I vote for Awareness campaign of the year?
        </div>
        <div class="answer" id="answer1">
            Its a category best judged by the finest judging panel, according to submission that the insurance companies have made, but you can vote for the best insurance company or the most innovative product
            <a href="/vote">on this Link</a>
        </div>

        <div class="question" id="question2">
            2. I would like to vote for the worst insurance company. Please advise how.
        </div>
        <div class="answer" id="answer2">
            You can't vote for the worst, but you can vote for the best insurance company
        </div>

        <div class="question" id="question3">
            3. When and where will next years awards take place?
        </div>
        <div class="answer" id="answer3">
            Please stay tuned, on the website dates will be advised.
        </div>

        <div class="question" id="question4">
            4. We would like to vote for Insurance Young achiever of the year, how do we go about that?
        </div>
        <div class="answer" id="answer4">
            For this year, Young Achievers submission were highly based on research and ideas, in which panel of judges went through it and gave their scoring, its a category that public voting judgment would not be of a good practice.
        </div>

        <div class="question" id="question5">
            5. What should I do to attend this brilliant event?
        </div>
        <div class="answer" id="answer5">
            Please register for Insurance Day event and be able to attend the ceremony too.
        </div>

        <div class="question" id="question6">
            6. How much should we pay to attend the awards?
        </div>
        <div class="answer" id="answer6">
            Its an invite only ceremony.
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#faqsLink').addClass('activePage')
        })

    </script>
@endsection


