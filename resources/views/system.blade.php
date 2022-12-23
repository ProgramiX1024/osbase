@extends('layout')
@php($title = $info['friendly_name'])

@section('content')
<h1>{{ $info['friendly_name'] }}</h1>
{!! $info['description'] !!}
<div class="mt-4">
@foreach($images as $image)
    <div class="mb-4">
    <a href="/download/{{ $image['id'] }}" target="_blank" title="Pobierz plik {{ $image['filename'] }}"><b>{{ $image['filename'] }}</b></a><br>
    {{ $image['description'] }}
    </div>
@endforeach
</div>
@endsection