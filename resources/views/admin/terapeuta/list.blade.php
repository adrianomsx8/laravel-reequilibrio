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
    criar="#criar" detalhe="/admin/terapeuta/show/" editar="/admin/terapeuta/show/" deletar="/admin/terapeuta/deletar/" token="{{ csrf_token() }}"
    modal="sim"
    >
    </tabela-lista>
    <div align="center">
     {{$terapeutas->links()}}
    </div>
    </painel>
    <modal nome="adicionar" titulo="Adicionar">
        <formulario id="formAdicionar"css="" action="#" method="put" enctype="" token="{{ csrf_token() }}">      
          <campo label="E-mail" type="email" name="email" btn="btn btn-primary btn-sm"></campo>    
        </formulario>
        <span slot="botoes"><button type="button" form="formAdicionar" class="btn btn-primary">Salvar</button></span>    
    </modal>

    <modal nome="editar" titulo="Editar  terapeutas">
      <formulario id="formEdit"  v-bind:action="'/admin/terapeuta/editar/' + $store.state.item.id" method="put"  token="{{ csrf_token() }}">
        <input type="text" placeholder="E-mail" name="email" class="form-control" value="" v-model="$store.state.item.email">
      </formulario>
     <span slot="botoes"><input type="submit" form="formEdit" name="salvar" class="btn btn-primary"></span>      
    </modal>

    <modal nome="detalhe" v-bind:titulo="$store.state.item.nome">
        <strong> Nome:  </strong> @{{$store.state.item.nome}} <br>
        <strong> Descrição:  </strong> @{{$store.state.item.descricao}}
    </modal>
</div>
@endsection