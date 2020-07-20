@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')
    <h1>Listagem de terapeutas</h1>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Terapeuta</th>
      <th scope="col">E-mail</th>
    </tr>
  </thead>
  <tbody>
    @foreach($terapeutas as $terapeuta)
        <tr>
        <th scope="row">{{ $terapeuta->id}}</th>
        <td>{{ $terapeuta->nome}}</td>
        <td>{{ $terapeuta->email}}</td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection