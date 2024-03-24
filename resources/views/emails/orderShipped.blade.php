<x-mail::message>
# Your application for the property acquisition was received and processed successfully

You can make the basic payment for you acquisition request by clicking the link below

<x-mail::button :url="$url">
    Make basic holding payment
</x-mail::button>

Thanks. <br>
 {{ config('app.name') }}
</x-mail::message>
