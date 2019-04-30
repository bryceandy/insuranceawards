@extends('template.default')

@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css" />
    <noscript>To use this site please enable javascript on your browser!</noscript>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
@endsection

@section('title')
    The Tanzania Insurance Awards 2019 - Vote
@endsection

@section('content')

    <div id="voteContent">

        <form action="/vote" method="post" id="icoya" >
            @csrf

            <label for="award">
                Insurance Company of the Year
                <input type="hidden" name="award" value="icoya" readonly >
            </label> <br>

            <label for="Choice1">
                <input type="radio" id="Choice1" name="name" value="Tanzania Insurance Brokers Association">
                Tanzania Insurance Brokers Association <span class="Tanzania Insurance Brokers Association"></span>
            </label>

            <label for="Choice2">
                <input type="radio" id="Choice2" name="name" value="Tanzania Insurance Regulatory Authority">
                Tanzania Insurance Regulatory Authority <span class="Tanzania Insurance Regulatory Authority"></span>
            </label>

            <label for="Choice3">
                <input type="radio" id="Choice3" name="name" value="Association of Tanzania Insurers">
                Association of Tanzania Insurers <span class="Association of Tanzania Insurers"></span>
            </label>

            <label for="Choice4">
                <input type="radio" id="Choice4" name="name" value="I.I.T">
                I.I.T <span class="I.I.T"></span>
            </label>

            <button type="submit" name="submit1">Vote</button>

        </form>

        <form action="/vote" method="post" id="miip" >
            @csrf

            <label for="award">
                Most Innovative Insurance Product
                <input type="hidden" name="award" value="miip" readonly >
            </label> <br>

            <label for="Choice1">
                <input type="radio" id="Choice1" name="name" value="Tanzania Insurance Brokers Association">
                Tanzania Insurance Brokers Association <span class="Tanzania Insurance Brokers Association"></span>
            </label>

            <label for="Choice2">
                <input type="radio" id="Choice2" name="name" value="Tanzania Insurance Regulatory Authority">
                Tanzania Insurance Regulatory Authority <span class="Tanzania Insurance Regulatory Authority"></span>
            </label>

            <label for="Choice3">
                <input type="radio" id="Choice3" name="name" value="Association of Tanzania Insurers">
                Association of Tanzania Insurers <span class="Association of Tanzania Insurers"></span>
            </label>

            <label for="Choice4">
                <input type="radio" id="Choice4" name="name" value="I.I.T">
                I.I.T <span class="I.I.T"></span>
            </label>

            <button type="submit" name="submit2">Vote</button>

        </form>

        <form action="/vote" method="post" id="mce" >
            @csrf

            <label for="award">
                Most Compliant Entity Award
                <input type="hidden" name="award" value="mce" readonly >
            </label> <br>

            <label for="Choice1">
                <input type="radio" id="Choice1" name="name" value="Tanzania Insurance Brokers Association">
                Tanzania Insurance Brokers Association <span class="Tanzania Insurance Brokers Association"></span>
            </label>

            <label for="Choice2">
                <input type="radio" id="Choice2" name="name" value="Tanzania Insurance Regulatory Authority">
                Tanzania Insurance Regulatory Authority <span class="Tanzania Insurance Regulatory Authority"></span>
            </label>

            <label for="Choice3">
                <input type="radio" id="Choice3" name="name" value="Association of Tanzania Insurers">
                Association of Tanzania Insurers <span class="Association of Tanzania Insurers"></span>
            </label>

            <label for="Choice4">
                <input type="radio" id="Choice4" name="name" value="I.I.T">
                I.I.T <span class="I.I.T"></span>
            </label>

            <button type="submit" name="submit3">Vote</button>

        </form>

        <form action="/vote" method="post" id="mioya" >
            @csrf

            <label for="award">
                Marketing Initiative of the Year Award
                <input type="hidden" name="award" value="mioya" readonly >
            </label><br>

            <label for="Choice1">
                <input type="radio" id="Choice1" name="name" value="Tanzania Insurance Brokers Association">
                Tanzania Insurance Brokers Association <span class="Tanzania Insurance Brokers Association"></span>
            </label>

            <label for="Choice2">
                <input type="radio" id="Choice2" name="name" value="Tanzania Insurance Regulatory Authority">
                Tanzania Insurance Regulatory Authority <span class="Tanzania Insurance Regulatory Authority"></span>
            </label>

            <label for="Choice3">
                <input type="radio" id="Choice3" name="name" value="Association of Tanzania Insurers">
                Association of Tanzania Insurers <span class="Association of Tanzania Insurers"></span>
            </label>

            <label for="Choice4">
                <input type="radio" id="Choice4" name="name" value="I.I.T">
                I.I.T <span class="I.I.T"></span>
            </label>

            <button type="submit" name="submit4">Vote</button>

        </form>

        <form action="/vote" method="post" id="ya" >
            @csrf

            <label for="award">
                Young Achievers' Award
                <input type="hidden" name="award" value="ya" readonly >
            </label> <br>

            <label for="Choice1">
                <input type="radio" id="Choice1" name="name" value="Tanzania Insurance Brokers Association">
                Tanzania Insurance Brokers Association <span class="Tanzania Insurance Brokers Association"></span>
            </label>

            <label for="Choice2">
                <input type="radio" id="Choice2" name="name" value="Tanzania Insurance Regulatory Authority">
                Tanzania Insurance Regulatory Authority <span class="Tanzania Insurance Regulatory Authority"></span>
            </label>

            <label for="Choice3">
                <input type="radio" id="Choice3" name="name" value="Association of Tanzania Insurers">
                Association of Tanzania Insurers <span class="Association of Tanzania Insurers"></span>
            </label>

            <label for="Choice4">
                <input type="radio" id="Choice4" name="name" value="I.I.T">
                I.I.T <span class="I.I.T"></span>
            </label>

            <button type="submit" name="submit5">Vote</button>

        </form>

    </div>

@endsection

@section('scripts')

  <script>
        $(document).ready(function () {

            //load votes on ready
            let names = {!! json_encode($voteNames->toArray(), JSON_HEX_TAG) !!};
            let icoya = {!! json_encode($icoya->toArray(), JSON_HEX_TAG) !!};
            let miip = {!! json_encode($miip->toArray(), JSON_HEX_TAG) !!};
            let mce = {!! json_encode($mce->toArray(), JSON_HEX_TAG) !!};
            let mioya = {!! json_encode($mioya->toArray(), JSON_HEX_TAG) !!};
            let ya = {!! json_encode($ya->toArray(), JSON_HEX_TAG) !!};

            console.log('length: '+icoya.length+' name-first: '+names[0]);

            //display votes
            for (let i = 0; i< names.length; i++){

                $("#icoya ."+names[i]).html(""+icoya[i]);
                $("#miip ."+names[i]).html(""+miip[i]);
                $("#mce ."+names[i]).html(""+mce[i]);
                $("#mioya ."+names[i]).html(""+mioya[i]);
                $("#ya ."+names[i]).html(""+ya[i]);
            }

            $('form').each(function () {

                //voting process
                $(this).submit(function (e) {
                    e.preventDefault();

                    let name = $(this).find("input[name='name']:checked").val();
                    let award = $(this).find("input[name='award']").val();
                    let url ='/vote';

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $(this).find("input[name='name']:checked").prop('checked', false);
                    new Noty({
                        text: 'Vote Success',
                        type: 'success',
                        theme: 'relax',
                        layout : 'topRight',
                        closeWith: ['click', 'button']
                    }).show();

                    $.ajax({
                        url: url,
                        method: "POST",
                        data: {
                            name: name,
                            award: award
                        },
                        dataType: "json"
                    })
                        .fail(function( jqXHR, textStatus ) {
                        //debug
                    });

                })

            });

        });
    </script>

    {{--chartJs--}}
    {{--<script type="text/javascript" async>--}}

        {{--function getRandomColor() {--}}
            {{--let letters = '0123456789ABCDEF'.split('');--}}
            {{--let color = '#';--}}
            {{--for (let i = 0; i < 6; i++) {--}}
                {{--color += letters[Math.floor(Math.random() * 16)];--}}
            {{--}--}}
            {{--return color;--}}
        {{--}--}}
        {{--function getRandomColorEach(count) {--}}
            {{--let data =[];--}}
            {{--for (let i = 0; i < count; i++) {--}}
                {{--data.push(getRandomColor());--}}
            {{--}--}}
            {{--return data;--}}
        {{--}--}}

        {{--let options = {--}}
            {{--responsive: true,--}}
            {{--legend: {--}}
                {{--display: true,--}}
                {{--labels: {--}}
                    {{--fontColor: '#15ace4',--}}
                    {{--fontSize: 22--}}
                {{--}--}}
            {{--},--}}
            {{--scales: {--}}
                {{--yAxes: [{--}}
                    {{--ticks: {--}}
                        {{--beginAtZero: true--}}
                    {{--}--}}
                {{--}]--}}
            {{--}--}}
        {{--};--}}

        {{--let element = $('canvas');--}}
        {{--let chart = new Chart(element[0].getContext('2d'), {--}}
            {{--type: 'bar',--}}
            {{--data: {--}}
                {{--labels: {!! json_encode($voteNames) !!},--}}
                {{--datasets: [{--}}
                    {{--label: "Number of Votes",--}}
                    {{--backgroundColor: getRandomColorEach(12),--}}
                    {{--data: {!! json_encode($icoya) !!},--}}
                {{--}]--}}
            {{--},--}}
            {{--options: options--}}
        {{--});--}}


        {{--let chart2 = new Chart(element[1].getContext('2d'), {--}}
            {{--type: 'bar',--}}
            {{--data: {--}}
                {{--labels: {!! json_encode($voteNames) !!},--}}
                {{--datasets: [{--}}
                    {{--label: "Number of Votes",--}}
                    {{--backgroundColor: getRandomColorEach(12),--}}
                    {{--data: {!! json_encode($miip) !!},--}}
                {{--}]--}}
            {{--},--}}
            {{--options: options--}}
        {{--});--}}


        {{--let chart3 = new Chart(element[2].getContext('2d'), {--}}
            {{--type: 'bar',--}}
            {{--data: {--}}
                {{--labels: {!! json_encode($voteNames) !!},--}}
                {{--datasets: [{--}}
                    {{--label: "Number of Votes",--}}
                    {{--backgroundColor: getRandomColorEach(12),--}}
                    {{--data: {!! json_encode($mce) !!},--}}
                {{--}]--}}
            {{--},--}}
            {{--options: options--}}
        {{--});--}}


        {{--let chart4 = new Chart(element[3].getContext('2d'), {--}}
            {{--type: 'bar',--}}
            {{--data: {--}}
                {{--labels: {!! json_encode($voteNames) !!},--}}
                {{--datasets: [{--}}
                    {{--label: "Number of Votes",--}}
                    {{--backgroundColor: getRandomColorEach(12),--}}
                    {{--data: {!! json_encode($mioya) !!},--}}
                {{--}]--}}
            {{--},--}}
            {{--options: options--}}
        {{--});--}}


        {{--let chart5 = new Chart(element[4].getContext('2d'), {--}}
            {{--type: 'bar',--}}
            {{--data: {--}}
                {{--labels: {!! json_encode($voteNames) !!},--}}
                {{--datasets: [{--}}
                    {{--label: "Number of Votes",--}}
                    {{--backgroundColor: getRandomColorEach(12),--}}
                    {{--data: {!! json_encode($ya) !!},--}}
                {{--}]--}}
            {{--},--}}
            {{--options: options--}}
        {{--});--}}

    {{--</script>--}}

@endsection

