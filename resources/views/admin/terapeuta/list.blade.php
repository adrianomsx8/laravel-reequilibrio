@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')
  <painel titulo="Listagem de terapeutas">
    <tabela-lista 
    v-bind:titulos="['#', 'Terapeuta', 'E-mail']"
    v-bind:itens="{{$terapeutas}}"
    ordem="desc" ordemcol="1"
    criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="7887522323"
    >
    </tabela-lista>'
    </painel>
</div>
@endsection