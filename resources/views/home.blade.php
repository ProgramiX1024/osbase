@extends('layout')
@php($title = __('interface.home'))

@section('content')
<h1>{{ __('interface.hello') }}</h1>
{{ __('interface.desc') }}

<div id="win-8-1-warning">
</div>

<div class="mt-4">
    <div class="card text-white bg-primary mb-3">
        <div class="card-header">Windows</div>
        <div class="card-body">
            <ul>
                @foreach($systems as $system)
                @if($system['category'] == 'windows')
                <li><a href="{{ asset('system/'.$system['slug']) }}">{{ $system['friendly_name'] }}</a></li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="card text-white bg-primary mb-3">
        <div class="card-header">{{ __('interface.office') }}</div>
        <div class="card-body">
            <ul>
                @foreach($systems as $system)
                @if($system['category'] == 'office')
                <li><a href="{{ asset('system/'.$system['slug']) }}">{{ $system['friendly_name'] }}</a></li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="card text-white bg-primary mb-3">
        <div class="card-header">{{ __('interface.linux') }}</div>
        <div class="card-body">
            <ul>
                @foreach($systems as $system)
                @if($system['category'] == 'linux')
                <li><a href="{{ asset('system/'.$system['slug']) }}">{{ $system['friendly_name'] }}</a></li>
                @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection