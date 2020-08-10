@extends('layouts.app')
@section('content')
<div class="container">
  <painel >
     <h2>{{$terapeuta->nome}}</h2>
     <p>Telefone: {{$terapeuta->telefone}}</p>
      <p>E-mail: {{$terapeuta->email}}</p>  
      <hr>
      Área de atuação  
      <ul class="list-group">
       @foreach($terapeuta->especialidades as $e )
        <li class="list-group-item">{{$e->terapia}}</li>       
       @endforeach
    </ul> 
  </painel>
</div>
@endsection
