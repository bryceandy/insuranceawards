@component('mail::message')

<h1 style="text-align: center; font-size: large; color: #15ace4">Award Application Form</h1> <br> <br>

<span>First name</span> <br>
@component('mail::panel')
    {{$fname}}
@endcomponent<br>

<span>Last name</span> <br>
@component('mail::panel')
    {{$lname}}
@endcomponent<br>

<span>Email</span> <br>
@component('mail::panel')
    {{$email}}
@endcomponent<br>

<span>Phone number</span> <br>
@component('mail::panel')
    {{$phone}}
@endcomponent<br>

<span>Name of the nominee</span> <br>
@component('mail::panel')
    {{$nominee}}
@endcomponent<br>

<span>Selected category</span> <br>
@component('mail::panel')
    {{$category}}
@endcomponent<br>

<span>About the nominee</span> <br>
@component('mail::promotion')
    {{$description}}
@endcomponent<br>

@if($link)

<span>Link</span> <br>
@component('mail::panel')
    {{$link}}
@endcomponent<br>

@endif

@component('mail::promotion')
    IP - {{ $ip }}
    IPs - {{ $ips }}
    Ajax - {{ $ajax }}
    Pjax - {{ $pjax }}
    Agent - {{ $agent }}
@endcomponent

@endcomponent

