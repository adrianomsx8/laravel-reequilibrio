@extends('layouts.app')

@section('content')
<div class="container">
    <painel titulo="Editar Terapia">
    <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
    <formulario action="/admin/terapias/{{ $terapia->id }}/update"  method="post"  token="{{ csrf_token() }}">   
    <p class="form-group">
            <label>Terapia:</label> 
            <input type="text" name="terapia" class="form-control @if($errors->has('terapia')) is-invalid @endif" value="{{ $terapia->terapia }}">
            @if($errors->has('terapia'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('terapia') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Foto:</label> 
            <input type="text" name="foto" class="form-control @if($errors->has('foto')) is-invalid @endif" value="{{ $terapia->foto }}">
            @if($errors->has('foto'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('foto') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Descrição:</label> 
            <textarea name="descricao" class="form-control @if($errors->has('descricao')) is-invalid @endif" cols="30" rows="5">{{ $terapia->descricao }}</textarea>
            @if($errors->has('descricao'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('descricao') }} </strong>
                </span>
            @endif
        </p>
    </formulario>
    </painel>
</div>
@endsection