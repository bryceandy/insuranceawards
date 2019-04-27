@extends('template.default')

@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css" />
    <noscript>To use this site please enable javascript on your browser!</noscript>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
@endsection

@section('title')
    The Tanzania Insurance Awards 2019 - Vote
@endsection

@section('content')

    <div id="voteContent">

        <form action="#" method="post" id="one" style="padding: 10vh" >
            @csrf

            <label for="award">
                <input type="hidden" name="award" value="Young Achievers" readonly >
            </label>
            <label for="name">
                <input type="text" name="name" >
            </label>

            <button type="submit" name="submit1">Send</button>

        </form>

        <form action="#" method="post" id="two" style="padding: 10vh" >
            @csrf

            <label for="award">
                <input type="hidden" name="award" value="Most Compliant" readonly >
            </label>
            <label for="name">
                <input type="text" name="name" >
            </label>

            <button type="submit" name="submit2">Send</button>

        </form>

    </div>

@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>
        $(document).ready( function () {
            $(function () {

                //when any form is submitted
                $('form').each(function () {

                    $(this).submit(function (e) {
                        e.preventDefault();

                        let url = e.target.action;
                        let formData = $(this).serialize();

                        $(this).fadeOut(1500);
                        $.post(url, formData, function (response) {

                            //Do something when the form is submitted
                            new Noty({
                                text: 'Vote Success!',
                                type: 'success',
                                theme: 'relax',
                                layout : 'topRight',
                                closeWith: ['click', 'button']
                            }).show();

                        })
                    })
                })

            })
        })
    </script>

@endsection

