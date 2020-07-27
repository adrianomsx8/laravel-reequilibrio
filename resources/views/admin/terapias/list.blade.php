@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')
   <a href="/admin/terapias/index" class="btn btn-success btn-sm">Novo</a>
    <h1>Listagem de terapias</h1>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Terapia</th>
      <th scope="col">Descrição</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($terapias as $terapia)
        <tr>
        <th scope="row">{{ $terapia->id}}</th>
        <td>{{ $terapia->terapia}}</td>
        <td>{{ $terapia->descricao}}</td>
        <td>
        <a href="/admin/terapias/{{ $terapia->id}}/editForm" class="btn btn-primary btn-sm">Editar</a> 
        <a href="admin/terapias/{{ $terapia->id}}/delete" class="btn btn-danger btn-sm"  onclick="return confirm('Confirmar Exclusão?')">Remover</a> 
        </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection