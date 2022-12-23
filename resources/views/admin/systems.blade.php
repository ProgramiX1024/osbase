@extends('admin.layout')

@section('content')
<div class="row">
    <div class="col">
        <h1>Systemy</h1>
    </div>
    <div class="col text-end">
        <a href="/admin/systems/new"><button class="btn btn-primary">+</button></a>
    </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nazwa</th>
      <th scope="col">Opis</th>
      <th scope="col">Link</th>
      <th scope="col">Akcje</th>
    </tr>
  </thead>
  <tbody>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
    </tr> -->
    @foreach($systems as $system)
        <tr>
            <th scope="row">{{ $system['friendly_name'] }}</th>
            <td>{{ $system['description'] }}</td>
            <td><pre>/{{ $system['slug'] }}</pre></td>
            <td>
                <a href="/admin/systems/edit/{{ $system['id'] }}"><button class="btn btn-primary">Edytuj</button></a>&nbsp;
                <a href="/admin/action/system/delete?id={{ $system['id'] }}"><button class="btn btn-primary">Usuń</button></a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection