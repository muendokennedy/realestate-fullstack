<x-mail::message>
# Your application for the property was rejected.

<x-mail::button :url="$url">
Go to Homepage
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
