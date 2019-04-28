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

        <div class="vote-block">
            <form action="/vote" method="post" id="one" >
                @csrf

                <label for="award">
                    Insurance Company of the Year
                    <input type="hidden" name="award" value="icoya" readonly >
                </label>
                <label for="icoya">
                    <select name="name" id="icoya">
                        <option value="Tanzania Insurance Brokers Association">Tanzania Insurance Brokers Association</option>
                        <option value="Tanzania Insurance Regulatory Authority">Tanzania Insurance Regulatory Authority</option>
                        <option value="Association of Tanzania Insurers">Association of Tanzania Insurers</option>
                        <option value="I.I.T">I.I.T</option>
                    </select>
                </label>

                <button type="submit" name="submit1">Vote</button>

            </form>
            <canvas id="icoya" width="350" height="350"></canvas>
        </div>

        <div class="vote-block">
            <form action="/vote" method="post" id="two" >
                @csrf

                <label for="award">
                    Most Innovative Insurance Product
                    <input type="hidden" name="award" value="miip" readonly >
                </label>
                <label for="miip">
                    <select name="name" id="miip">
                        <option value="Tanzania Insurance Brokers Association">Tanzania Insurance Brokers Association</option>
                        <option value="Tanzania Insurance Regulatory Authority">Tanzania Insurance Regulatory Authority</option>
                        <option value="Association of Tanzania Insurers">Association of Tanzania Insurers</option>
                        <option value="I.I.T">I.I.T</option>
                    </select>
                </label>

                <button type="submit" name="submit2">Vote</button>

            </form>
            <canvas id="miip" width="350" height="350"></canvas>

        </div>

        <div class="vote-block">
            <form action="/vote" method="post" id="three" >
                @csrf

                <label for="award">
                    Most Compliant Entity Award
                    <input type="hidden" name="award" value="mce" readonly >
                </label>
                <label for="mce">
                    <select name="name" id="mce">
                        <option value="Tanzania Insurance Brokers Association">Tanzania Insurance Brokers Association</option>
                        <option value="Tanzania Insurance Regulatory Authority">Tanzania Insurance Regulatory Authority</option>
                        <option value="Association of Tanzania Insurers">Association of Tanzania Insurers</option>
                        <option value="I.I.T">I.I.T</option>
                    </select>
                </label>

                <button type="submit" name="submit3">Vote</button>

            </form>
            <canvas id="mce" width="350" height="350"></canvas>

        </div>

        <div class="vote-block">
            <form action="/vote" method="post" id="four" >
                @csrf

                <label for="award">
                    Marketing Initiative of the Year Award
                    <input type="hidden" name="award" value="mioya" readonly >
                </label>
                <label for="mioya">
                    <select name="name" id="mioya">
                        <option value="Tanzania Insurance Brokers Association">Tanzania Insurance Brokers Association</option>
                        <option value="Tanzania Insurance Regulatory Authority">Tanzania Insurance Regulatory Authority</option>
                        <option value="Association of Tanzania Insurers">Association of Tanzania Insurers</option>
                        <option value="I.I.T">I.I.T</option>
                    </select>
                </label>

                <button type="submit" name="submit4">Vote</button>

            </form>
            <canvas id="mioya" width="350" height="350"></canvas>

        </div>

        <div class="vote-block">
            <form action="/vote" method="post" id="five" >
                @csrf

                <label for="award">
                    Young Achievers' Award
                    <input type="hidden" name="award" value="ya" readonly >
                </label>
                <label for="ya">
                    <select name="name" id="ya">
                        <option value="Tanzania Insurance Brokers Association">Tanzania Insurance Brokers Association</option>
                        <option value="Tanzania Insurance Regulatory Authority">Tanzania Insurance Regulatory Authority</option>
                        <option value="Association of Tanzania Insurers">Association of Tanzania Insurers</option>
                        <option value="I.I.T">I.I.T</option>
                    </select>
                </label>

                <button type="submit" name="submit5">Vote</button>

            </form>
            <canvas id="ya" width="350" height="350"></canvas>

        </div>

    </div>

@endsection

@section('scripts')

    {{--jquery--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('form').each(function () {

                $(this).submit(function (e) {
                    e.preventDefault();

                    let name = $(this).find("select[name='name']").val();
                    let award = $(this).find("input[name='award']").val();
                    console.log('name: '+name+' and award: '+award);
                    let url ='/vote';

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $(this).fadeOut(1200);
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

            })
        });
    </script>

    {{--chartJs--}}
    <script>

        function getRandomColor() {
            let letters = '0123456789ABCDEF'.split('');
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
        function getRandomColorEach(count) {
            let data =[];
            for (let i = 0; i < count; i++) {
                data.push(getRandomColor());
            }
            return data;
        }

        let options = {
            responsive: true,
            legend: {
                display: true,
                labels: {
                    fontColor: '#15ace4',
                    fontSize: 18
                }
            }
        };


        let ctx = document.getElementById("icoya").getContext("2d");
        let chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($voteNames) !!},
                datasets: [{
                    label: "Number of Votes",
                    backgroundColor: getRandomColorEach(12),
                    data: {!! json_encode($icoya) !!},
                }]
            },
            options: options
        });

        let ctx2 = document.getElementById("miip").getContext("2d");
        let chart2 = new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: {!! json_encode($voteNames) !!},
                datasets: [{
                    label: "Number of Votes",
                    backgroundColor: getRandomColorEach(12),
                    data: {!! json_encode($miip) !!},
                }]
            },
            options: options
        });

        let ctx3 = document.getElementById("mce").getContext("2d");
        let chart3 = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: {!! json_encode($voteNames) !!},
                datasets: [{
                    label: "Number of Votes",
                    backgroundColor: getRandomColorEach(12),
                    data: {!! json_encode($mce) !!},
                }]
            },
            options: options
        });

        let ctx4 = document.getElementById("mioya").getContext("2d");
        let chart4 = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: {!! json_encode($voteNames) !!},
                datasets: [{
                    label: "Number of Votes",
                    backgroundColor: getRandomColorEach(12),
                    data: {!! json_encode($mioya) !!},
                }]
            },
            options: options
        });

        let ctx5 = document.getElementById("ya").getContext("2d");
        let chart5 = new Chart(ctx5, {
            type: 'bar',
            data: {
                labels: {!! json_encode($voteNames) !!},
                datasets: [{
                    label: "Number of Votes",
                    backgroundColor: getRandomColorEach(12),
                    data: {!! json_encode($ya) !!},
                }]
            },
            options: {
                responsive: true,
                legend: {
                    display: true,
                    labels: {
                        fontColor: '#15ace4',
                        fontSize: 18
                    }
                }
            }
        });


    </script>

@endsection

