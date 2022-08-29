@component('mail::message')
# Gentile Utente

Grazie per esserti registrato benvenuto nel blog.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
