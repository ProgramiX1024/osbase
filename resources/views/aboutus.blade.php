@extends('layout')
@php($title = __('interface.about'))

@section('content')
<h1>{{ __('interface.about') }}</h1>
<div class="row text-center">
    <div class="col">
        <h3>ProgramiX 1024</h3>
        {{ __('interface.programix') }}<div class="mt-2">E-mail: programix@osbase.pl</div>
    </div>
    <div class="col">
        <h3>mily</h3>
        {{ __('interface.mily') }}
        <div class="mt-2">
        E-mail: mily@osbase.pl
        </div>
    </div>
    <div class="col">
        <h3>xXsummerprismaXx</h3>
        {{ __('interface.somer') }}
        <div class="mt-2">E-mail: somer@osbase.pl</div>
    </div>
</div>
@endsection