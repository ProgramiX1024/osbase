@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col">
        <h1>Edycja systemu {{ $system['friendly_name'] }}</h1>
    </div>
    <div class="col text-end">
        <a href="/admin/systems"><button class="btn btn-primary">< Cofnij</button></a>
    </div>
</div>
<div class="w-50">
            <form method="post" action="/admin/action/system/edit">
            @csrf
            <input type="hidden" name="id" value="{{ $system['id'] }}">
                <div class="mb-3 mt-4">
                    <label for="name" class="form-label">Nazwa</label>
                    <input name="name" type="text" value="{{ $system['friendly_name'] }}" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Opis</label>
                    <input name="description" value="{{ $system['description'] }}" type="text" class="form-control" id="description">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Kategoria (windows/linux/office)</label>
                    <input name="category" value="{{ $system['category'] }}" type="text" class="form-control" id="category">
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Link</label>
                    <div class="input-group">
                        <span class="input-group-text" id="addon">/</span>
                        <input name="slug" value="{{ $system['slug'] }}" type="text" class="form-control" id="slug" aria-describedby="addon">
                    </div>
                </div>
                <div class="mt-4">
                    <input type="submit" value="Zapisz" class="btn btn-primary">
                </div>
            </form>
        </div>
@endsection