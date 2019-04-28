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

        <form action="/vote" method="post" id="one" style="padding: 10vh" >

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

            <button type="submit" name="submit1">Send</button>

        </form>

        <form action="/vote" method="post" id="two" style="padding: 10vh" >

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

            <button type="submit" name="submit2">Send</button>

        </form>

        <form action="/vote" method="post" id="three" style="padding: 10vh" >

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

            <button type="submit" name="submit3">Send</button>

        </form>

        <form action="/vote" method="post" id="four" style="padding: 10vh" >

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

            <button type="submit" name="submit4">Send</button>

        </form>

        <form action="/vote" method="post" id="five" style="padding: 10vh" >

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

            <button type="submit" name="submit5">Send</button>

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
                        let name = $(this).find("select[name='name']").val();
                        let award = $(this).find("input[name='award']").val();

                        console.log('name: '+name+'and award: '+award);
                        $(this).fadeOut(1500);

                        $.post(
                            url,
                            {name: name, award: award },
                            function() {
                                new Noty({
                                    text: 'Vote Success!',
                                    type: 'success',
                                    theme: 'relax',
                                    layout : 'topRight',
                                    closeWith: ['click', 'button']
                                }).show();
                            },
                            'json'
                        )
                    })
                })

            })
        })
    </script>

@endsection

