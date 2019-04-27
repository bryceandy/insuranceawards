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

        <form action="#" method="post" style="padding: 20vh">
            @csrf

            <label for="name">
                <input type="text" name="name" >
            </label>
            <label for="award">
                <input type="text" name="award" >
            </label>

            <button type="submit" name="submit">Send</button>

        </form>

    </div>

@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>
        $(document).ready( function () {
            $(function () {
                $('form').submit(function (e) {
                    e.preventDefault();

                    let url = e.target.action;
                    let formData = $(this).serialize();
                    $.post(url, formData, function (response) {

                        new Noty({
                            text: 'Vote Sent',
                            type: 'success',
                            theme: 'relax',
                            layout : 'topRight',
                            closeWith: ['click', 'button']
                        }).show();
                    })
                })
            })
        })
    </script>

@endsection

