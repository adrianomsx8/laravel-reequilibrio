@extends('layouts.app')

@section('content')
<div class="container">
<!-- <a href="/usuariuos/index" class="btn btn-success btn-sm">Novo</a> -->
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Perfil</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
        <th scope="row">{{ $user->id}}</th>
        <td>{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->profile}}</td>
        <td>
         <a href="/admin/usuarios/{{ $user->id}}/edit" class="btn btn-primary btn-sm">Edit</a> 
         <a href="/admin/usuarios/{{ $user->id}}/delete" class="btn btn-danger btn-sm"  onclick="return confirm('Confirmar Exclusão?')">Remover</a>
        <td>
      </tr> 
    @endforeach
    </tbody>
</table>
</div>
@endsection