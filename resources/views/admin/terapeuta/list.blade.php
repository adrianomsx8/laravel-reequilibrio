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
    <modal nome="adicionar">
      <form>
      <painel titulo="Listagem de terapeutas">
        <formulario css="" action="#" method="put" enctype="" token="{{ csrf_token() }}">      
          <campo label="E-mail" type="email" name="email" btn="btn btn-primary btn-sm"></campo>
        
        </formulario>
      </form>
    </painel>
    </modal>

    <modal nome="editar">
      <form>
      <painel titulo="Listagem de terapeutas">
        <formulario css="" action="#" method="put" enctype="" token="{{ csrf_token() }}">      
          <campo label="E-mail" type="email" name="email"  btn="btn btn-primary btn-sm"></campo>
          <input type="text" name="teste" value=""  v-model="$store.state.item.email" />
        </formulario>
      </form>
    </painel>
    </modal>
</div>
@endsection