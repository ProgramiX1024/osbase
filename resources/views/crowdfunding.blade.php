@extends('layout')
@php($title = __('interface.money'))

@section('content')
{!! __('interface.money3') !!}
<div class="mt-2">
<h2>{{ __('interface.moneyheader') }}</h2>
{{ __('interface.money2') }}:
<ul>
<li>Tipply - <a href="https://tipply.pl/u/osbase">https://tipply.pl/u/osbase</a></li>
<li>PayPal - <a href="https://paypal.me/osbasepl">https://paypal.me/osbasepl</a></li>
<li>Buy Me a Coffee - <a href="https://buymeacoffee.com/osbase">https://buymeacoffee.com/osbase</a></li>
</ul>
</div>
@endsection