@extends('layouts.app')

@section('content')
<div class="container">
<h1>Terapeutas</h1>

<div class="row">
  @foreach($terapeutas as $t)
    <div class="col-4" >
      @if($t->fotos()->count())
        <img src="{{asset('/storage/images/' . $t->fotos()->first()->foto)}}" alt="" class="img-fluid" />
      @endif
      <h5><a href="{{route('detalhar', ['id' => $t->id])}}">{{$t->nome}}</a></h5>
      <p>{{ Str::limit($t->descricao, 20) }}</p>
    </div>
  @endforeach
</div>
{{$terapeutas->links()}}
</div>
@endsection
