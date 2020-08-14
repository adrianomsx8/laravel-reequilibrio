@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')
<painel titulo="Listagem de Terapias">  
<migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
    <tabela-lista 
    v-bind:titulos="['#', 'Nome', 'E-mail', 'Perfil']"
    v-bind:itens="{{json_encode($users)}}"
    ordem="desc" ordemcol="1"
    criar="/admin/usuarios/create"  
    editar="/admin/usuarios/edit" deletar="/admin/usuarios/destroy/"
    
    >
    </tabela-lista>
    <!--  criar="#criar" detalhe="/admin/terapeuta/show/" editar="/admin/terapeuta/show/" deletar="/admin/terapeuta/deletar/" token="{{ csrf_token() }}"
    modal="sim" -->
    <div align="center">
     {{$users->links()}}
    </div>
</painel>
    <modal nome="detalhe" v-bind:titulo="$store.state.item.nome">
        <strong> Nome:  </strong> @{{$store.state.item.terapia}} <br>
        <strong> Descrição:  </strong> @{{$store.state.item.descricao}}
    </modal>
</div>
@endsection