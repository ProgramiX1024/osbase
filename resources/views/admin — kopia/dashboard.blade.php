@extends('admin.layout')

@section('content')
<div class="text-center mt-4">
    <h1>Witaj, {{ $username }}!</h1>
    <div class="mt-4">
        <a href="/admin/images"><button class="btn btn-primary">Obrazy</button></a>&nbsp;
        <a href="/admin/systems"><button class="btn btn-primary">Systemy</button></a>
        <div class="mt-3">
            <a href="/admin/action/logout"><button class="btn btn-primary">Wyloguj się</button></a>
        </div>
    </div>
</div>
@endsection