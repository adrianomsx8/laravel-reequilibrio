@extends('layouts.app')

@section('content')
<div class="container">
    <painel titulo="Adicionar foto">
    <formulario action="{{route('terapeuta.upload', ['id' => $id])}}" method="post" enctype="multipart/form-data">   
        <div class="custom-file">
        <input type="file" name="foto" class="custom-file-input @if($errors->has('foto')) is-invalid @endif" id="customFile">
        <label class="custom-file-label" for="customFile">Escolha uma foto</label>
        @if($errors->has('foto'))
               <span class="invalid-feedback"> 
                    <strong>{{$errors->first('foto') }} </strong>
                </span>
            @endif
        </div>
    </formulario>
    </painel>
</div>
@endsection