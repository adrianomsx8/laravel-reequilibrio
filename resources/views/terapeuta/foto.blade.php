@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar foto</h1>
    <form action="{{route('terapeuta.upload', ['id' => $id])}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}    
        <p class="form-group">
            <label>Foto:</label> 
            <input type="file" name="foto"  class="form-control @if($errors->has('foto')) is-invalid @endif" value="">
            @if($errors->has('foto'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('foto') }} </strong>
                </span>
            @endif
        </p>
        <input type="submit" name="salvar" class="btn btn-primary btn-lg">
    </form>
</div>
@endsection