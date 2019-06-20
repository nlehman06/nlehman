@component('mail::message')
# Contact Form Submission

<a href="mailto:{{ $message['email'] }}">{{ $message['name'] }}</a> has sent you a message.

@component('mail::panel')
{{ $message['message'] }}
@endcomponent

@endcomponent
