@extends('template.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Application for Nomination
@endsection

@section('content')

    <div id="applicationContent">

        <form action="/apply" method="POST">
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
                <input type="email" name="email" id="email">
            </label>

            <label for="phone">
                Phone number
                <input type="text" id="phone" name="phone">
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

            <label for="file">
                Supporting attachment (optional)
                <input type="file" name="file" id="file">
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


