@extends('layouts.app')

@section('content')
<div class="container">
    <painel titulo="Editar Usuário">
    <form action="/usuarios/{{ $user->id }}" method="post">
        {{ csrf_field() }}
       <input type="text" placeholder="Nome" name="name" class="form-control" value="{{ $user->name }}">
       <input type="text" placeholder="E-mail" name="email" class="form-control" value="{{ $user->email }}">
       <!--<input type="text" placeholder="Senha" name="password" class="form-control" value="">-->
       <select class="form-control" id="profile" name="profile">
          <option value="">Selecione</option>
          <option value="A">Administrador</option>
          <option value="T">Terapeuta</option>
          <option value="P">Paciente</option>
          <option value="C">Usuário Comum</option>
       </select>
       <input type="submit" name="salvar" class="btn btn-primary">
    </form>
    </painel>
    </div>
@endsection