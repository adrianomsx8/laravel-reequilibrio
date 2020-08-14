@extends('layouts.app')

@section('content')
<div class="container">

@include('flash::message')
        <painel titulo="Área Restrita">
        Bem vindo     
        <hr> 
        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}                       
                        </div>
         @endif

        <strong>Usuário comum</strong> <br>
        <div class="row">      
           <div class="col-3" >
              <caixa titulo="Registrar Terapeuta" url="{{ url('/admin/terapeuta/create') }}" cor="#00a65a" icone="body"></caixa>
            </div>
            <div class="col-3" >
              <caixa titulo="Editar Terapeuta" url="{{ url('/admin/terapeuta/edit/15') }}" cor="#00a65a" icone="body"></caixa>
            </div>
            <div class="col-3" >
               <caixa titulo="Vincular Especialidade" url="/admin/terapeuta/{{$terapeuta_id}}/vincular" cor="#00c0ef" icone="medkit"></caixa>
            </div>
            <div class="col-3" >
               <caixa titulo="Adicionar foto" url="/admin/terapeuta/{{$terapeuta_id}}/foto" cor="#f39c12" icone="camera"></caixa>
            </div>
        </div>
        <strong>Usuário administrador</strong> <br>
        <div class="row">      
           <div class="col-3" >
              <caixa titulo="Usuários" url="{{ url('/admin/usuarios/index') }}" contador="{{$total_usuarios}}" cor="#00a65a" icone="people"></caixa>
            </div>
            <div class="col-3" >
              <caixa titulo="Especialidades" url="{{ url('/admin/terapias/index') }}" contador="{{$total_terapias}}" cor="#00c0ef" icone="medkit"></caixa>
            </div>
            @can('eUsuario')
            <div class="col-3" >
              <caixa titulo="Listagem de terapeutas" contador="{{$total_terapeutas}}" url="{{ url('/admin/terapeuta/index') }}" cor="#f39c12" icone="body"></caixa>
            </div>
            @endcan
        </div>
       </painel>     
</div>
@endsection
