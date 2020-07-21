@extends('layouts.app')

@section('content')
<div class="container">
<h1>Terapeutas</h1>

<div class="row">
  @foreach($terapeutas as $t)
    <div class="col-4">
      <h2><a href="{{route('detalhar', ['id' => $t->id])}}">{{$t->nome}}</a></h2>
      <p>{{$t->descricao}}</p>
    </div>
  @endforeach
</div>
{{$terapeutas->links()}}
</div>
@endsection
