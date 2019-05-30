@extends('template.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Application for Nomination
@endsection

@section('stylesheets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
@endsection

@section('content')

    @if(session()->has('mailfail'))
        <script>
            new Noty({
                text: '{{session('mailfail')}}',
                type: 'error',
                theme: 'relax',
                layout : 'topRight',
                closeWith: ['click', 'button']
            }).show();
        </script>
    @endif

    @if(session()->has('mailsuccess'))
        <script>
            new Noty({
                text: '{{session('mailsuccess')}}',
                type: 'success',
                theme: 'relax',
                layout : 'topRight',
                closeWith: ['click', 'button']
            }).show();
        </script>
    @endif

    <div id="applicationContent">

        <form action="/apply" method="POST" enctype="multipart/form-data">
            @csrf
            <img src="{{'images/insurancelogo.png'}}" alt="logo">
            <h1 class="text-center">Award Application Form</h1>

            <label for="fname">
                First name
                <input type="text" name="firstname" id="fname" required>
            </label>

            <label for="lname">
                Last name
                <input type="text" name="lastname" id="lname" required>
            </label>

            <label for="email">
                Email
                <input type="email" name="email" id="email" required>
            </label>

            <label for="phone">
                Phone number
                <input type="text" id="phone" name="phone" required>
            </label>

            <label for="nom">
                Name of the Nominee
                <input type="text" name="nominee" id="nom" required>
            </label>

            <label for="cat">
                Contesting for &nbsp;
                <select name="category" id="cat" required>
                    <option value="Insurance Company of the Year">Insurance Company of the Year</option>
                    <option value="Most Innovative Insurance Product">Most Innovative Insurance Product</option>
                    <option value="Young Achievers' Award - Ideas/Research, Development">Young Achievers' Award - Ideas/Research, Development</option>
                    <option value="Young Achievers' Award - Entrepreneurship">Young Achievers' Award - Entrepreneurship</option>
                    <option value="Insurance Brokerage of the Year">Insurance Brokerage of the Year</option>
                    <option value="Insurance Awareness Campaign of the Year">Insurance Awareness Campaign of the Year</option>
                    <option value="Corporate Social Responsibility Award">Corporate Social Responsibility Award</option>
                </select>
            </label>

            <label for="description">
                About the nominee &nbsp;
                <textarea name="description" id="description" cols="60" rows="5" required></textarea>
            </label>

            <label for="attachment">
                Supporting attachment
                <input type="file" name="attachment" id="attachment" required>
            </label>

            <button>SUBMIT</button>

        </form>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#nominationLink').addClass('activePage')
        })

    </script>
@endsection


