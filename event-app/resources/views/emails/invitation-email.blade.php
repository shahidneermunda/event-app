{{--@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent--}}

    <!DOCTYPE html>
<html>
<head>
    <title>Invitation Letter</title>
</head>
<body>
<h3>Subject: Short Invitation Letter to the Guest of {{$name}}</h3>
<br>
<p>Dear Sir/Madam,</p>
<br>
<p>I am very pleased to inform you that your presence is requested at our annual prize-giving ceremony. We are conducting a small event, where different participants will compete with each other in many sports. Winners will be given prizes and honored by you. You will also be rewarded with a certificate for honoring us with your presence.</p>
<br>
<p>You are warm-heartedly invited. Thank you very much for your time, and consideration.</p>
<br>
<b>Start Date: {{$startDate}}</b><br>
<b>End Date: {{$endDate}}</b><br>
<b>Venue: {{$venue}}</b><br>
<p>Yours sincerely,</p>
<br>
<p>{{$username}}</p>
</body>
</html>
