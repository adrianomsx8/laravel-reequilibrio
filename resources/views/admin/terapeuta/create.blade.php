@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')
    <painel titulo="Cadastro de Terapeuta">
    <formulario action="/admin/terapeuta/store" method="post">
        <p class="form-group">
            <label>Nome:</label> 
            <input type="text" name="nome" class="form-control @if($errors->has('nome')) is-invalid @endif" value="{{$user->name}}">
            @if($errors->has('nome'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('nome') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Telefone:</label>  
            <input type="text" name="telefone" class="form-control @if($errors->has('telefone')) is-invalid @endif" value="{{old('telefone')}}">
            @if($errors->has('telefone'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('telefone') }} </strong>
                </span>
            @endif
            </span>
        </p>
        <p class="form-group">
            <label>E-mail:</label>  
            <input type="text"  name="email" class="form-control @if($errors->has('email')) is-invalid @endif" value="{{$user->email}}">
            @if($errors->has('email'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('email') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Foto:</label> 
            <input type="text"  name="foto" class="form-control @if($errors->has('foto')) is-invalid @endif" value="{{old('foto')}}">
            @if($errors->has('foto'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('foto') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Especialidade: </label>
            <input type="text"  name="especialidade" class="form-control @if($errors->has('especialidade')) is-invalid @endif" value="{{old('especialidade')}}">
            @if($errors->has('especialidade'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('especialidade') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Descrição:</label> 
            <textarea name="descricao" class="form-control @if($errors->has('descricao')) is-invalid @endif" cols="30" rows="5">{{old('descricao')}}</textarea>
            @if($errors->has('descricao'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('descricao') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Cidade:</label>
            <input type="text"  name="cidade" class="form-control @if($errors->has('cidade')) is-invalid @endif" value="{{old('cidade')}}">
            @if($errors->has('cidade'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('cidade') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Estado: </label>
            <input type="text"  name="estado" class="form-control @if($errors->has('estado')) is-invalid @endif" value="{{old('estado')}}">
            @if($errors->has('estado'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('estado') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Endereço:</label> 
            <input type="text"  name="endereco" class="form-control @if($errors->has('endereco')) is-invalid @endif" value="{{old('endereco')}}">
            @if($errors->has('endereco'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('endereco') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Formação:</label> 
            <input type="text"  name="formacao" class="form-control @if($errors->has('formacao')) is-invalid @endif" value="{{old('formacao')}}">
            @if($errors->has('formacao'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('formacao') }} </strong>
                </span>
            @endif
        </p>
    </formulario>
    </painel>
</div>
@endsection