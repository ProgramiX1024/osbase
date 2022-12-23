@extends('admin.layout')


@section('content')
<div class="row">
    <div class="col">
        <h1>Obrazy</h1>
    </div>
    <div class="col text-end">
        <a href="/admin/images"><button class="btn btn-primary">< Cofnij</button></a>
        <a href="/admin/images/new/{{ $systemid }}"><button class="btn btn-primary">+</button></a>
    </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nazwa pliku</th>
      <th scope="col">Opis</th>
      <th scope="col">Linki</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
    </tr> -->
    @if(empty($images))
      &nbsp;
    @else
      @foreach($images as $image)
              <tr>
                  <th scope="row">{{ $image['filename'] }}</th>
                  <td>{{ $image['description'] }}</td>
                  <td>{{ $image['path'] }}</td>
                  <td>
                      <a href="/admin/images/edit/{{ $image['id'] }}"><button class="btn btn-primary">Edytuj</button></a>&nbsp;
                      <a href="/admin/action/image/delete?id={{ $image['id'] }}"><button class="btn btn-primary">Usuń</button></a>
                  </td>
              </tr>
        @endforeach
    @endif
  </tbody>
</table>
@endsection