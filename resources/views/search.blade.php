@extends('layout')
@php($title = __('interface.searchresults').$query)

@section('content')
<h1>{{ __('interface.searchresults')}} "{{ $query }}"</h1>
@foreach($images as $image)
    <div class="mb-4">
    <a href="/download/{{ $image['id'] }}" target="_blank" title="Pobierz plik {{ $image['filename'] }}"><b>{{ $image['filename'] }}</b></a><br>
    {{ $image['description'] }}
    </div>
@endforeach
@endsection