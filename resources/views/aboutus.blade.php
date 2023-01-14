@extends('layout')
@php($title = __('interface.about'))

@section('content')
<h1>{{ __('interface.about') }}</h1>
<div class="row text-center">
    <div class="col">
        <h3>Person name</h3>
        {{ __('interface.personname') }}<div class="mt-2">E-mail: (person e-mail)</div>
    </div>
    <div class="col">
        <h3>Person name</h3>
        {{ __('interface.personname') }}<div class="mt-2">E-mail: (person e-mail)</div>
    </div>
    <div class="col">
        <h3>Person name</h3>
        {{ __('interface.personname') }}<div class="mt-2">E-mail: (person e-mail)</div>
    </div>
</div>
@endsection
