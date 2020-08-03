@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')
  <painel titulo="Listagem de terapeutas">  
    <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
    <tabela-lista 
    v-bind:titulos="['#', 'Terapeuta', 'E-mail']"
    v-bind:itens="{{$terapeutas}}"
    ordem="desc" ordemcol="1"
    criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="{{ csrf_token() }}"
    modal="sim"
    >
    </tabela-lista>'
    </painel>
    <modal nome="adicionar" titulo="Adicionar">
        <formulario id="formAdicionar"css="" action="#" method="put" enctype="" token="{{ csrf_token() }}">      
          <campo label="E-mail" type="email" name="email" btn="btn btn-primary btn-sm"></campo>    
        </formulario>
        <span slot="botoes"><button type="button" form="formAdicionar" class="btn btn-primary">Salvar</button></span>    
    </modal>

    <modal nome="editar" titulo="Editar  terapeutas">
        <formulario id="formEdit" css="" action="#" method="put" enctype="" token="{{ csrf_token() }}">      
          <campo label="E-mail" type="email" name="email" v-model="$store.state.item.email"  btn="btn btn-primary btn-sm"></campo>
          <input type="text" name="teste" value=""  v-model="$store.state.item.id" />
        </formulario>
        <span slot="botoes"><button type="button" form="formEdit" class="btn btn-primary">Salvar</button></span>    
    </modal>

    <modal nome="detalhe" v-bind:titulo="$store.state.item.nome">
        <p> Descrição </p> @{{$store.state.item.nome}}
    </modal>
</div>
@endsection