@extends('layout')
@php($title = __('interface.timers'))

@section('content')
<h1>{{ __('interface.timers') }}</h1>
{{ __('interface.timerdesc') }}
<div class="mt-4">
<a href="https://kiedywakacje.pl/odliczanie_custom.html?y=2023&m=1&d=10&h=0&mn=0&s=0&txt=Koniec%20wsparcia%20Windows%208.1" target="_blank">{{ __('interface.timerwin8') }}</a><br>
<a href="https://kiedywakacje.pl/odliczanie_custom.html?y=2025&m=10&d=14&h=0&mn=0&s=0&txt=Koniec%20wsparcia%20Windows%2010" target="_blank">{{ __('interface.timerwin10') }}</a>
</div>
@endsection