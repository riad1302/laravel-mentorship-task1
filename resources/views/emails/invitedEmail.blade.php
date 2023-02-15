@component('mail::message')
# Hi Dear,

My name is {{$mailData['senderName']}}, and I’m contacting you from Laravel Mentorship. 
I would like to invite.

@component('mail::button', ['url' => $mailData['link']])
Registration Link
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
