@extends('layouts.app')

@section('content')
<div class="container">
   <painel titulo="Cadastro de Usuários">
   <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
    <formulario id="formAdicionar" action="/admin/usuarios/store" method="post">
    <p class="form-group">
            <label>Nome:</label> 
            <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" value="{{old('name')}}">
            @if($errors->has('name'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('name') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>E-mail:</label> 
            <input type="text" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" value="{{old('email')}}">
            @if($errors->has('email'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('email') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Senha:</label> 
            <input type="password" name="password" class="form-control @if($errors->has('password')) is-invalid @endif" value="{{old('password')}}">
            @if($errors->has('password'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('password') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
        <label>Perfil:</label> 
        <select class="form-control @if($errors->has('profile')) is-invalid @endif" value="{{old('profile')}}" id="profile" name="profile">
          <option value="">Selecione</option>
          <option value="A" >Administrador</option>
          <option value="T" >Terapeuta</option>
          <option value="P" >Paciente</option>
          <option value="C" >Usuário Comum</option>
        </select>
        @if($errors->has('profile'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('profile') }} </strong>
                </span>
            @endif
    </p>
        <!--<input type="submit" name="salvar" class="btn btn-primary btn-sm">-->
    </formulario>
    </painel>
</div>
@endsection