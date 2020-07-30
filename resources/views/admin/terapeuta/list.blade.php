@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')
  <painel titulo="Listagem de terapeutas">
     <modal-link tipo="button" nome="meuModalTeste" titulo="criar" css=""></modal-link>
     <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
    <tabela-lista 
    v-bind:titulos="['#', 'Terapeuta', 'E-mail']"
    v-bind:itens="{{$terapeutas}}"
    ordem="desc" ordemcol="1"
    criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="7887522323"
    >
    </tabela-lista>'
    </painel>
    <modal nome="meuModalTeste">
      <form>
      <painel titulo="Listagem de terapeutas">
        teste
      </form>
    </painel>
    </modal>
</div>
@endsection