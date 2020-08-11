@extends('layouts.app')

@section('content')
<div class="container">
  <painel titulo="Terapeutas">
    <p>
      <form class="form-inline text-center" action="{{route('terapeutas')}}" method="get">
        <input type="search" class="form-control" name="busca" placeholder="Buscar" value="{{isset($busca) ? $busca : ""}}" />
        <button class="btn btn-info">Buscar</button>
      </form>
    </p>
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
