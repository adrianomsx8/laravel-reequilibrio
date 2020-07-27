@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')
    <h1>Listagem de especialidades</h1>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Especialidade</th>
    </tr>
  </thead>
  <tbody>
    @foreach($terapeuta->especialidades as $especialidade)
        <tr>
        <td>{{ $especialidade->terapia}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection