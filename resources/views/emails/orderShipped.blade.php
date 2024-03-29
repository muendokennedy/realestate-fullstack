<x-mail::message>
# Your application for the property acquisition was received.

## We will process your application and once the process is complete, we will notify you via your email.

<x-mail::button :url="$url">
    Go to home page
</x-mail::button>

Thanks. <br>
 {{ config('app.name') }}
</x-mail::message>
