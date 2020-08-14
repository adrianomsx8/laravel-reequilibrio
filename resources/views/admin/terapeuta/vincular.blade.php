@extends('layouts.app')

@section('content')
<div class="container">
    <painel titulo="Vincular Especialidades">
    <formulario action="{{route('terapeuta.vincularSave', ['id' => $id])}}" method="post"> 
            @foreach($terapias as $t)
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="terapia[]" value="{{$t->id}}" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
              {{$t->terapia}} 
            </label>
            </div>
            @endforeach
    </formulario>
    </painel>
</div>
@endsection