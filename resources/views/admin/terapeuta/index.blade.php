@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')
  <painel titulo="Listagem de terapeutas">  
    <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
    <tabela-lista 
    v-bind:titulos="['#', 'Terapeuta', 'E-mail']"
    v-bind:itens="{{json_encode($terapeutas)}}"
    ordem="desc" ordemcol="1"
    detalhe="/admin/terapeuta/show/"
    modal="sim"
    >
    </tabela-lista>
    <div align="center">
     {{$terapeutas->links()}}
    </div>
    </painel>
    <modal nome="detalhe" v-bind:titulo="$store.state.item.nome">
        <strong> Nome:  </strong> @{{$store.state.item.nome}} <br>
        <strong> Descrição:  </strong> @{{$store.state.item.descricao}}
    </modal>
</div>
@endsection