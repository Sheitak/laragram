@component('mail::message')
# Bienvenue !

Merci, {{ $data->username }} de vous être inscrit sur LaraGram avec l'email {{ $data->email }}

Cordialement,
{{ config('app.name') }}
@endcomponent
