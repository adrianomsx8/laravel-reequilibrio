@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastro de terapias</h1>
    <form action="/terapias/create" method="post">
    {{ csrf_field() }}
    <p class="form-group">
            <label>Terapia:</label> 
            <input type="text" name="terapia" class="form-control @if($errors->has('terapia')) is-invalid @endif" value="{{old('terapia')}}">
            @if($errors->has('terapia'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('terapia') }} </strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Foto:</label> 
            <input type="text" name="foto" class="form-control @if($errors->has('foto')) is-invalid @endif" value="{{old('foto')}}">
            @if($errors->has('foto'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('foto') }} </strong>
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
        <input type="submit" name="salvar" class="btn btn-primary btn-lg">

    </form>
</div>
@endsection