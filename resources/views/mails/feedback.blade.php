@component('mail::message')

Hi <b>{{$fname}} {{$lname}}</b>,

@component('mail::panel')
    Your application has been received and will be processed.
    Feel free to apply to other award categories that fit
    your organization.
@endcomponent

@component('mail::promotion')
    Rewarding Insurance Excellence in Tanzania
@endcomponent

@endcomponent

