@extends('layouts.app')

@section('content')
<div class="container">
  <painel titulo="Terapeutas">
  <div class="row">
    @foreach($terapeutas as $t)
      <card 
          nome="{{$t->nome}}"
          descricao="{{ Str::limit($t->descricao, 20) }}"
          imagem="{{asset('/storage/images/' . $t->foto)}}"
          detalhar="{{route('detalhar', [$t->id, Str::slug($t->nome)])}}"
          ></card>
    @endforeach
  </div>
  <div align="center">{{$terapeutas->links()}}</div>
  </painel>
</div>
@endsection
