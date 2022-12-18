@component('mail::message')
    <h1>Contact Form Message</h1>

    <h3>Subject</h3>
    <pre>{{ $message_subject->getAttribute('name') ?? '-' }}</pre>

    <h3>Sender Name</h3>
    <pre>{{ $sender_name ?? '-' }}</pre>

    <h3>Sender Email</h3>
    <pre>{{ $sender_email ?? '-' }}</pre>

    <h3>Phone Number</h3>
    <pre>{{ $sender_phone ?? '-' }}</pre>

    <br>

    <h3>Message</h3>
    <pre><code>{{$message_text}}</code></pre>

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
