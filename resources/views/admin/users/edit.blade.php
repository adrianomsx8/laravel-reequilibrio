@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')
<painel titulo="Editar Usuário">
<migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
<formulario action="/admin/usuarios/{{ $user->id }}/update"  method="put">   
    <p class="form-group">
        <label>Nome:</label> 
       <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" value="{{ $user->name }}">
       @if($errors->has('name'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('name') }} </strong>
                </span>
        @endif
    </p>
    <p class="form-group">
        <label>E-mail:</label> 
       <input type="text" placeholder="E-mail" name="email" class="form-control @if($errors->has('name')) is-invalid @endif" value="{{ $user->email }}">
       @if($errors->has('email'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('email') }} </strong>
                </span>
        @endif
    </p>
    <p class="form-group">
        <label>Senha:</label> 
        <input type="password" name="password" class="form-control @if($errors->has('password')) is-invalid @endif" value="">
        @if($errors->has('password'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('password') }} </strong>
                </span>
        @endif
    </p>
    <p class="form-group">
        <label>Perfil:</label> 
        <select class="form-control @if($errors->has('profile')) is-invalid @endif" id="profile" name="profile">
          <option value="">Selecione</option>
          <option value="A" @if($user->profile == 'A') selected @endif >Administrador</option>
          <option value="T" @if($user->profile == 'T') selected @endif>Terapeuta</option>
          <option value="P" @if($user->profile == 'P') selected @endif>Paciente</option>
          <option value="C" @if($user->profile == 'C') selected @endif>Usuário Comum</option>
        </select>
        @if($errors->has('profile'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('profile') }} </strong>
                </span>
        @endif
    </p>
    </formulario>
    </painel>
    </div>
@endsection