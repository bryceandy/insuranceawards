@extends('layouts.default')

@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
@endsection

@section('title')
    The Tanzania Insurance Awards 2019 - Vote
@endsection

@section('content')

    <div id="voteContent">

        <h1 class="text-center">Votes for all Award Categories</h1>

        <p class="text-left" style="padding-left: 5vw; padding-right: 5vw">
            <b style="color: #15ace4">How to vote:</b> <br>
            For every category, click on the radio-button on the left side of the company's name and then click the <b>VOTE</b> button below it.
            <br> You are advised not to vote for your own company.
            <br> <br>
        </p>

        <form action="/vote" method="post" id="icoya" >
            @csrf

            <label for="award">
                Insurance Company of the Year
                <input type="hidden" name="award" value="icoya" >
            </label> <br>

            <label for="Choice1">
                <input type="radio" id="Choice1" name="name" value="Sanlam Life Insurance Tanzania">
                Sanlam Life Insurance Tanzania <span class="Sanlam Life Insurance Tanzania"></span>
            </label>

            <label for="Choice2">
                <input type="radio" id="Choice2" name="name" value="Alliance Insurance Corporation Limited">
                Alliance Insurance Corporation Limited <span class="Alliance Insurance Corporation Limited"></span>
            </label>

            <label for="Choice3">
                <input type="radio" id="Choice3" name="name" value="Alliance Life Assurance Limited">
                Alliance Life Assurance Limited <span class="Alliance Life Assurance Limited"></span>
            </label>

            <label for="Choice4">
                <input type="radio" id="Choice4" name="name" value="Jubilee Insurance Limited Company">
                Jubilee Insurance Limited Company <span class="Jubilee Insurance Limited Company"></span>
            </label>

            <button type="submit" name="submit1">Vote</button>

        </form>

        <form action="/vote" method="post" id="miip" >
            @csrf

            <label for="award">
                Most Innovative Insurance Product
                <input type="hidden" name="award" value="miip" >
            </label> <br>

            <label for="Choice1">
                <input type="radio" id="Choice1" name="name" value="Jubilee Insurance Limited Company - Safari Voucher">
                Jubilee Insurance Limited Company - Safari Voucher <span class="Jubilee Insurance Limited Company - Safari Voucher"></span>
            </label>

            <label for="Choice2">
                <input type="radio" id="Choice2" name="name" value="Milvik Tanzania Limited - Bima Mkononi">
                Milvik Tanzania Limited - Bima Mkononi <span class="Milvik Tanzania Limited - Bima Mkononi"></span>
            </label>

            <label for="Choice3" style="font-size:medium">
                <input type="radio" id="Choice3" name="name" value="Mgen Tanzania Insurance Company Limited - Multi-Peril Crop Insurance">
                Mgen Tanzania Insurance Company Limited - Multi-Peril Crop Insurance <span class="Mgen Tanzania Insurance Company Limited - Multi-Peril Crop Insurance"></span>
            </label>

            <label for="Choice4">
                <input type="radio" id="Choice4" name="name" value="Acclavia Insurance Brokers - Boda Salama">
                Acclavia Insurance Brokers - Boda Salama <span class="Acclavia Insurance Brokers - Boda Salama"></span>
            </label>

            <button type="submit" name="submit2">Vote</button>
        </form>
    </div>

@endsection

@section('scripts')

  <script>
        $(document).ready(function () {

            //load votes on ready
            let icoyanames = {!! json_encode($icoyaNames->toArray(), JSON_HEX_TAG) !!};
            let miipnames = {!! json_encode($miipNames->toArray(), JSON_HEX_TAG) !!};

            let icoya = {!! json_encode($icoya->toArray(), JSON_HEX_TAG) !!};
            let miip = {!! json_encode($miip->toArray(), JSON_HEX_TAG) !!};

            //display votes
            for (let i = 0; i< icoyanames.length; i++){

                $("#icoya span[class='"+icoyanames[i]+"'] ").html(icoya[i]);
            }

            for (let i = 0; i< miipnames.length; i++) {

            $("#miip span[class='"+miipnames[i]+"'] ").html(miip[i]);
            }

            //making submission buttons active
            $('form').on('click', 'input', function () {

                var form = $(this).parent().parent();

                $(form[0]).find('button').css({
                    'pointer-events': 'auto',
                    'cursor': 'pointer'
                })
            });

            $('form').each(function () {

                //voting process
                $(this).submit(function (e) {
                    e.preventDefault();

                    let name = $(this).find("input[name='name']:checked").val();
                    let award = $(this).find("input[name='award']").val();
                    let url ='/vote';

                    $(this).find("input[name='name']:checked").prop('checked', false);

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });

                    $.ajax({
                        url: url,
                        method: "POST",
                        data: {
                            name: name,
                            award: award
                        },
                        dataType: "json"
                    })
                        .fail(function( jqXHR ) {
                        if(jqXHR.status === 200)
                        {
                            new Noty({
                                text: "Vote Success!",
                                type: 'success',
                                theme: 'relax',
                                layout : 'topRight',
                                closeWith: ['click', 'button']
                            }).show();
                        }
                        else if(jqXHR.status === 406)
                        {
                            new Noty({
                                text: "Your vote was already placed for this category!",
                                type: 'error',
                                theme: 'relax',
                                layout : 'topRight',
                                closeWith: ['click', 'button']
                            }).show();
                        }
                    })

                })

            });

        });
    </script>

  <script type="text/javascript">

      $(document).ready(function () {

          $('#voteLink').addClass('activePage')
      })
  </script>
@endsection

