@component('mail::message')
    <h1>Contact Form Message</h1>

    <h3>Sender Information</h3>
    <pre>{{ $sender_name }} ({{ $sender_email }})</pre>

    <br>

    <h3>Message</h3>
    <pre><code>{{$message_text}}</code></pre>

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
