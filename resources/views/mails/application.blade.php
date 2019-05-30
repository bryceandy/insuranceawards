@component('mail::message')

<div id="form">

<h1 class="text-center">Award Application Form</h1>

<label for="fname">
    First name
<input type="text" name="firstname" id="fname" value="{{$fname}}" readonly>
</label>

<label for="lname">
    Last name
<input type="text" name="lastname" id="lname" value="{{$lname}}" readonly>
</label>

<label for="email">
    Email
<input type="email" name="email" id="email" value="{{$email}}" readonly>
</label>

<label for="phone">
    Phone number
<input type="text" id="phone" name="phone" value="{{$phone}}" readonly>
</label>

<label for="nom">
    Name of the Nominee
<input type="text" name="nominee" id="nom" value="{{$nominee}}" readonly>
</label>

<label for="cat">
    Contesting for &nbsp;
<input type="text" name="category" id="cat" value="{{$category}}" readonly>
</label>

<label for="description">
    About the nominee &nbsp;
<textarea name="description" id="description" cols="60" rows="5" readonly>
        {{$description}}
</textarea>
</label>

</div>

@endcomponent

