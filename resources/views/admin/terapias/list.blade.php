@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')
<painel titulo="Listagem de Terapias">  
<migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
    <tabela-lista 
    v-bind:titulos="['#', 'Terapia', 'Descrição']"
    v-bind:itens="{{json_encode($terapias)}}"
    ordem="desc" ordemcol="1"
    criar="/admin/terapias/index"  
    editar="/admin/terapias/edit" deletar="/admin/terapias/delete"
    >
    </tabela-lista>
    <!--  criar="#criar" detalhe="/admin/terapeuta/show/" editar="/admin/terapeuta/show/" deletar="/admin/terapeuta/deletar/" token="{{ csrf_token() }}"
    modal="sim" -->
    <div align="center">
     {{$terapias->links()}}
    </div>
</painel>
    <modal nome="detalhe" v-bind:titulo="$store.state.item.nome">
        <strong> Nome:  </strong> @{{$store.state.item.terapia}} <br>
        <strong> Descrição:  </strong> @{{$store.state.item.descricao}}
    </modal>
</div>
@endsection