@extends('template.forms')

@section('title')
    The Tanzania Insurance Awards 2019 - {{$titleName}} Form
@endsection

@section('content')

    <div id="formContent">

        <form action="#" method="post" id="form-miip">
            @csrf
            <div id="formHeader">
                <p class="text-center">
                    2019 TANZANIA ANNUAL INSURANCE AWARDS <br> JUDGES EVALUATION FORM <br><br>
                    MOST INNOVATIVE INSURANCE PRODUCT OF THE YEAR AWARD <br> (Category - Access)
                </p>
            </div>

            <label for="nameInput" class="nameInput">Name of organization</label>
            <input type="text" id="nameInput" class="nameInput">

            <div id="criterion">

            </div>
        </form>

    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#formsLink').addClass('activePage')
        })

    </script>
@endsection


