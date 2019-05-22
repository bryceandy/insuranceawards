@extends('template.default')

@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
@endsection

@section('title')
    The Tanzania Insurance Awards 2019 - Vote
@endsection

@section('content')

    <div id="voteContent">

        <h1 class="text-center">Award Categories</h1>

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

        <form action="/vote" method="post" id="yaa1" >
            @csrf

            <label for="award">
                Young Achievers' Award - Ideas/Research Development
                <input type="hidden" name="award" value="yaa1" readonly >
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

        <form action="/vote" method="post" id="yaa2" >
            @csrf

            <label for="award">
                Young Achievers' Award - Entrepreneurship
                <input type="hidden" name="award" value="yaa2" readonly >
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

            <button type="submit" name="submit4">Vote</button>

        </form>

        <form action="/vote" method="post" id="iboya" >
            @csrf

            <label for="award">
                Insurance Brokerage of the Year
                <input type="hidden" name="award" value="iboya" readonly >
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

            <button type="submit" name="submit5">Vote</button>

        </form>

        <form action="/vote" method="post" id="iacoya" >
            @csrf

            <label for="award">
                Insurance Awareness Campaign of the Year
                <input type="hidden" name="award" value="iacoya" readonly >
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

            <button type="submit" name="submit6">Vote</button>

        </form>

        <form action="/vote" method="post" id="csra" >
            @csrf

            <label for="award">
                Corporate Social Responsibility Award
                <input type="hidden" name="award" value="csra" readonly >
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

            <button type="submit" name="submit7">Vote</button>

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
            let yaa1 = {!! json_encode($yaa1->toArray(), JSON_HEX_TAG) !!};
            let yaa2 = {!! json_encode($yaa2->toArray(), JSON_HEX_TAG) !!};
            let iboya = {!! json_encode($iboya->toArray(), JSON_HEX_TAG) !!};
            let iacoya = {!! json_encode($iacoya->toArray(), JSON_HEX_TAG) !!};
            let csra = {!! json_encode($csra->toArray(), JSON_HEX_TAG) !!};

            //display votes
            for (let i = 0; i< names.length; i++){

                $("#icoya span[class='"+names[i]+"'] ").html(icoya[i]);
                $("#iacoya span[class='"+names[i]+"'] ").html(iacoya[i]);
                $("#csra span[class='"+names[i]+"'] ").html(csra[i]);
                $("#miip span[class='"+names[i]+"'] ").html(miip[i]);
                $("#yaa2 span[class='"+names[i]+"'] ").html(yaa2[i]);
                $("#iboya span[class='"+names[i]+"'] ").html(iboya[i]);
                $("#yaa1 span[class='"+names[i]+"'] ").html(yaa1[i]);

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

@endsection

