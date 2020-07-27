@extends('layouts.app')
@section('content')
<div class="container">
<h1>Terapeutas Detalhado</h1>
<hr>
<div class="row">
    <div class="col-4">
      <h2>{{$terapeuta->nome}}</h2>
      <p>Telefone: {{$terapeuta->telefone}}</p>
      <p>E-mail: {{$terapeuta->email}}</p>     
    </div>
</div>
<hr>
Área de atuação
<div class="col-12">
    <ul class="list-group">
       @foreach($terapeuta->especialidades as $e )
        <li class="list-group-item">{{$e->terapia}}</li>       
       @endforeach
    </ul>
</div>
</div>
@endsection
