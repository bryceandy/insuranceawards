@extends('layouts.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Judges
@endsection

@section('content')

    <div id="judgesContent">

        <div id="judgesHeader">
            <h1 class="text-center">2019 Judges</h1>
        </div>

        <div id="judges">

            <div class="judge">
                <img src="{{'images/ilomo.png'}}" alt="Judge">
                <div class="name text-center">Peter Ilomo</div>
                <div class="title text-center">Former Chair & Board Member</div>
                <div class="company text-center">TIRA</div>
            </div>

            <div class="judge">
                <img src="{{'images/kakusa.png'}}" alt="Judge">
                <div class="name text-center">Rajab Kakusa</div>
                <div class="title text-center">JC Vice-Chairperson</div>
                <div class="company text-center">CEO at TAN-RE</div>
            </div>

            <div class="judge">
                <img src="{{'images/katundu.png'}}" alt="Judge">
                <div class="name text-center">Dr Jamal Katundu</div>
                <div class="title text-center">JC Secretary</div>
                <div class="company text-center">Senior Lecturer and Researcher IFM</div>
            </div>

            <div class="judge">
                <img src="{{'images/mshiu.png'}}" alt="Judge">
                <div class="name text-center">Octavian Mshiu</div>
                <div class="title text-center">Acting President</div>
                <div class="company text-center">Tanzania Chamber of Commerce Industries and Agriculture</div>
            </div>

            <div class="judge">
                <img src="{{'images/ulanga.png'}}" alt="Judge">
                <div class="name text-center">John Ulanga</div>
                <div class="title text-center">Country Director</div>
                <div class="company text-center">TradeMark East Africa in Tanzania</div>
            </div>

            <div class="judge">
                <img src="{{'images/msusa.png'}}" alt="Judge">
                <div class="name text-center">Neema Msusa</div>
                <div class="title text-center">Partner</div>
                <div class="company text-center">Ernst & Young Tanzania</div>
            </div>

            <div class="judge">
                <img src="{{'images/rughani.png'}}" alt="Judge">
                <div class="name text-center">Sanjay Rughani</div>
                <div class="title text-center">CEO</div>
                <div class="company text-center">Standard Chatered Bank</div>
            </div>

            <div class="judge">
                <img src="{{'images/accaro.png'}}" alt="Judge">
                <div class="name text-center">Louis Accaro</div>
                <div class="title text-center">Director of Membership Services</div>
                <div class="company text-center">Tanzania Private Sector Foundation</div>
            </div>

        </div>

    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#committee').addClass('activePage')
        })

    </script>
@endsection


