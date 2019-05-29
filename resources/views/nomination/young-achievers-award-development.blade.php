@extends('template.nomination')

@section('title')
    The Tanzania Insurance Awards 2019 - {{$titleName}} Nomination
@endsection

@section('content')

    <div id="nominationContent">

        <h1 class="text-center">Young Achievers' Award - Ideas/Development, Research</h1>

        <p>
            <b>The Young Achievers Award is open to anyone in the industry aged between 18 years and 30 years. The judges will be looking for a person who has;</b> <br> <br>

            1. Made significant strides in community development over the last couple of years. The development must, in one way or the other, be related to Insurance as a discipline and profession.<br>
            2. Clearly demonstrated to their team, institution or department that his or her actions, discoveries, innovations or writings have had a positive impact on society or country.<br>
            3. Commitment to pursuing relevant professional qualifications. <br>
            4. Exemplary academic performance in the insurance discipline. <br> <br>

            <b>Key Submissions:</b> <br> <br>

            • National ID or Passport <br>
            • Nominees company or institute <br>
            • Achievers professional development<br>
            • Achievers contribution to the insurance fraternity<br>
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


