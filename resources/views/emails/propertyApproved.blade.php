<x-mail::message>
# Your application for the property was processed and and approved successfully.

## You can now proceed to making the basic holding payment for the property by clicking the lick below


<x-mail::button :url="$url">
Proceed to make payment
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
