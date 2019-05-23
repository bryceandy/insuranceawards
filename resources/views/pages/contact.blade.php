@extends('template.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Contact US
@endsection

@section('content')

    <div id="contactContent">

        <h1 class="text-center">Contact Us</h1>
        <h4 class="text-center">If you have any queries regarding the Insurance Awards, please contact the relevant person below:</h4>

        <div class="contactContainer">

            <div class="contact">
                <img src="{{'images/ikongo.png'}}" alt="contact">
                <div class="name text-center">Margaret Ikongo</div>
                <div class="title text-center">Award Committee Chairperson</div>
                <div class="company text-center">+255 784 210 530 <br> mikongo2002@yahoo.co.uk</div>
            </div>

            <div class="contact">
                <img src="{{'images/angela.png'}}" alt="contact">
                <div class="name text-center">Lizzy Angela</div>
                <div class="title text-center">Award Consultant</div>
                <div class="company text-center">+255 757 372 363 <br> lizangeljos@yahoo.com</div>
            </div>

            <div class="contact">
                <img src="{{'images/oyuke.png'}}" alt="contact">
                <div class="name text-center">Phostine Oyuke</div>
                <div class="title text-center">Communications Officer-TIRA</div>
                <div class="company text-center">+255 788 551 664 <br> poyuke@tira.go.tz</div>
            </div>

            <div class="contact">
                <img src="{{'images/toshi.png'}}" alt="contact">
                <div class="name text-center">Bryan Toshi</div>
                <div class="title text-center">Award Consultant</div>
                <div class="company text-center">+255 783 918 566 <br> bryan.toshi@gmail.com</div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#contactLink').addClass('activePage')
        })

    </script>
@endsection

