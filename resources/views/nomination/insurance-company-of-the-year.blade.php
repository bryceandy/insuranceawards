@extends('layouts.nomination')

@section('title')
    The Tanzania Insurance Awards 2019 - {{$titleName}} Nomination
@endsection

@section('content')

    <div id="nominationContent">

        <h1 class="text-center">{{$titleName}}</h1>

        <p>
            <b>Open to all insurers authorised to conduct business in the Tanzania</b> <br> <br>
            The shortlist for this category will be made up of the firms that the judges believe have demonstrated, through their entries, in the BIMA AWARDS categories - including – but not restricted to - Personal Lines Insurer of the Year, Commercial Lines Insurer of the Year, Customer Care, Claims Initiative, Investing in the Profession and Digital Insurance Innovation – that they are a business that stands out from the field.<br><br>

            The firms shortlisted for this award will be expected to do a short presentation to the Tanzania insurance Award judges. At this presentation, they will be able to fully explain their commitment to meeting customer demands; a broad strategic vision; track record of innovation and growth/ profitability.<br><br>

            <b>The Judges will:</b> <br> <br>

            a) These awards will be largely voted by insurance consumers. <br>
            b) Entities that shall have satisfactory met regulatory requirement stand the higher chance <br>
            c) Demonstrate - within the context of an overall brand strategy - how their organization has used a range of techniques to improve market share, enhance customer loyalty, raise awareness or break into new markets.
            <br>
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


