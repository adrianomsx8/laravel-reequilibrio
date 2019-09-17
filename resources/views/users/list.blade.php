@extends('layouts.app')

@section('content')
<div class="container">
    <ul>
    @foreach($users as $user)
      <li>{{ $user->name}}</li>
    @endforeach
    </ul>

    <form action="/usuarios" method="post">
        {{ csrf_field() }}
       <input type="text" placeholder="Nome" name="name" class="form-control">
       <input type="text" placeholder="E-mail" name="email" class="form-control">
       <input type="text" placeholder="Senha" name="password" class="form-control">
       <input type="submit" name="salvar" class="btn btn-primary">
    </form>

    </div>
@endsection