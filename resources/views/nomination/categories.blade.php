@extends('template.default')

@section('title')
    The Tanzania Insurance Awards 2019 - Nomination Categories
@endsection

@section('content')

    <div id="categoriesContent">

        <h1>Nomination Categories</h1>
        <p>
            The following are guidelines on how every award category will be nominated and which groups are
            eligible to participate in a specific award. <a href="#methodologyLink">See the methodology</a>
        </p>

        <div class="cats">
            <a href="nomination-categories/insurance-company-of-the-year">Insurance Company of the Year</a>
            <a href="nomination-categories/most-innovative-insurance-product">Most Innovative Insurance Product</a>
            <a href="nomination-categories/young-achievers-award-development">Young Achievers' Award - Ideas/Research, Development</a>
            <a href="nomination-categories/young-achievers-award-entrepreneurship">Young Achievers' Award - Entrepreneurship</a>
            <a href="nomination-categories/insurance-brokerage-of-the-year">Insurance Brokerage of the Year</a>
            <a href="nomination-categories/insurance-awareness-campaign-of-the-year">Insurance Awareness Campaign of the Year</a>
            <a href="nomination-categories/corporate-social-responsibility-award">Corporate Social Responsibility Award</a>

        </div>

        <h3 id="methodologyLink">Nomination Methodology</h3>
        <p>
            All nominations will close on a particular date and hour. A six stage process detailed below shall then commence to identify the final winners.
        </p>
        <b>STAGE ONE:</b> Nominations <br>
        <b>STAGE TWO:</b> Research and confirmation of nominees. Once nominations have closed, Glow Consulting Services and (IIT) Audit and Steering Commitee shall receive the nominations and pass them on to the judges.<br>
        <b>STAGE  THREE:</b>  All  nominees  will  be  notified  and  invited  to  make  presentations. <br>
        <b>STAGE  FOUR:</b>  Judging.  The  panel  of  esteemed  judges  chosen  from  the  Insurance fraternity, Academia and other professionals will review the finalists’ submission  forms  and  submit  their  decisions  to  the  audit  firm.  The  judges’  decisions  are  independent  and  impartial  and  there  are  no  deliberations  on  decisions  made  on  each  category.  Each  judge  will  sign  a  Non-Disclosure  Agreement (NDA).<br>
        Only nominees who will have made presentations before the deadline shall be considered finalists. Forms submitted to support the nominations will provide guidance to the judges for their final decision.<br>
        <b>STAGE FIVE:</b> Announcement of Finalists. <br>
        <b>STAGE SIX:</b> Award  Ceremony.  We  will  organise  the  Awards  ceremony  dinner program to be held on 27th September 2019 in Mwanza. Besides the insurance fraternity, the gala shall be attended by representatives critical to the sector: donor organisations, national leadership, business associations and the sector CEOs.<br>
        The mass media are partners in the growth of the industry and will provide necessary support in publicising the awards and general industry performance.<br>
        <b>NB.</b> The  success  of  the  awards  will  largely  depend  on  how  the  process  is  publicised through the alternative media channels.
    </div>

@endsection

@section('scripts')
    <script type="text/javascript">

        $(document).ready(function () {

            $('#nominationLink').addClass('activePage')
        })

    </script>
@endsection


