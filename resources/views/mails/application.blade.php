@component('mail::message')

<div id="form">

<h1 class="text-center">Award Application Form</h1>

<label for="fname">
    First name
<input value="{{$fname}}" readonly>
</label> <br> <br> <br>

<label for="lname">
    Last name
<input value="{{$lname}}" readonly>
</label> <br> <br> <br>

<label for="email">
    Email
<input value="{{$email}}" readonly>
</label> <br> <br> <br>

<label for="phone">
    Phone number
<input value="{{$phone}}" readonly>
</label> <br> <br> <br>

<label for="nom">
    Name of the Nominee
<input value="{{$nominee}}" readonly>
</label> <br> <br> <br>

<label for="cat">
    Contesting for &nbsp;
<input id="#cat" value="{{$category}}" readonly>
</label> <br> <br> <br>

<label for="description">
    About the nominee &nbsp;
<textarea name="description" id="description" cols="60" rows="5" readonly>
        {{$description}}
</textarea> <br>
</label>

</div>

@endcomponent

