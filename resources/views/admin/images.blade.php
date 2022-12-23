@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col">
        <h1>Obrazy</h1>
        <h4>Wybierz system</h4>
    </div>
    <div class="col text-end">
    <a href="/admin/dashboard"><button class="btn btn-primary">< Cofnij</button></a>
    </div>
</div>
<ul>
    @foreach($systems as $system)
        <li><a href="/admin/images/{{ $system['id'] }}">{{ $system['friendly_name'] }}</a></li>
    @endforeach
</ul>
@endsection