@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col">
        <h1>Edycja obrazu {{ $image['filename'] }}</h1>
    </div>
    <div class="col text-end">
        <a href="/admin/images/{{ $image['systemid'] }}"><button class="btn btn-primary">< Cofnij</button></a>
    </div>
</div>
<div class="w-50">
            <form method="post" action="/admin/action/image/edit">
            @csrf
            <input type="hidden" name="imgid" value="{{ $id }}">
                <div class="mb-3 mt-4">
                    <label for="filename" class="form-label">Nazwa pliku</label>
                    <input name="filename" value="{{ $image['filename'] }}" type="text"  class="form-control" id="filename">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Opis</label>
                    <input name="description" value="{{ $image['description'] }}" type="text" class="form-control" id="description">
                </div>
                <div class="mb-3">
                    <label for="path" class="form-label">Ścieżki (np. https://host1.osbase.pl/obraz.iso,https://host2.osbase.pl/obraz.iso)</label>
                    <input name="path" value="{{ $image['path'] }}" type="text" class="form-control" id="path">
                </div>
                <div class="mt-4">
                    <input type="submit" value="Zapisz" class="btn btn-primary">
                </div>
            </form>
        </div>
@endsection