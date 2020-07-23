@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Vincular de especialidades</h1>
    <hr>
    <form action="{{route('terapeuta.vincularSave', ['id' => $id])}}" method="post">
        {{ csrf_field() }}    
        <div class="row">
            @foreach($terapias as $t)
            <div class="col-4" >
               <input type="checkbox" name="terapia[]" value="{{$t->id}}"> {{$t->terapia}} 
            </div>
            @endforeach
        </div>

        <input type="submit" name="salvar" class="btn btn-success">
    </form>
</div>
@endsection