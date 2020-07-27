@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/usuarios/{{ $user->id }}" method="post">
        {{ csrf_field() }}
       <input type="text" placeholder="Nome" name="name" class="form-control" value="{{ $user->name }}">
       <input type="text" placeholder="E-mail" name="email" class="form-control" value="{{ $user->email }}">
       <input type="text" placeholder="Senha" name="password" class="form-control" value="">
       <input type="submit" name="salvar" class="btn btn-primary">
    </form>

    </div>
@endsection