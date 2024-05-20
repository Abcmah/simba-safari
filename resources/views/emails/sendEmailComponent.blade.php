<x-mail::message>
# {{$title}}

@isset($name)
## Dear {{$name}}   
@endisset($name)


{{$message}}

@isset($whatsappUrl)
<x-mail::panel>
reach out on <b>WhatApp</b>
<x-mail::button :url="$whatsappUrl" color='success'>
Open Chat
</x-mail::button>
</x-mail::panel>

@endisset($whatsappUrl)
@isset($replyTo)
<x-mail::panel>
<x-mail::button :url="'mailto:'.$replyTo" color='primary'>
reply 
</x-mail::button>
</x-mail::panel>
@endisset($replyTo)

@isset($name)
Thanks,<br>
{{ config('app.name') }}
@endisset($name)

</x-mail::message>
