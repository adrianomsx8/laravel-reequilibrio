@extends('layouts.app')

@section('content')
<div class="container">

@include('flash::message')
    <div class="row justify-content-center">
        <div class="col-md-8">
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
           <div class="col-5" >
              <caixa titulo="Registrar Terapeuta" url="{{ url('/terapeuta') }}" cor="#00a65a" icone="body"></caixa>
            </div>
            <div class="col-5" >
               <caixa titulo="Vincular Especialidade" url="/terapeuta/{{$terapeuta_id}}/vincular" cor="#00c0ef" icone="medkit"></caixa>
            </div>
            <div class="col-5" >
               <caixa titulo="Adicionar foto" url="/terapeuta/{{$terapeuta_id}}/foto" cor="#f39c12" icone="camera"></caixa>
            </div>
        </div>
        <strong>Usuário administrador</strong> <br>
        <div class="row">      
           <div class="col-5" >
              <caixa titulo="Usuários" url="{{ url('/usuarios') }}" cor="#00a65a" icone="people"></caixa>
            </div>
            <div class="col-5" >
              <caixa titulo="Especialidades" url="{{ url('/terapias') }}" cor="#00c0ef" icone="medkit"></caixa>
            </div>
            <div class="col-5" >
              <caixa titulo="Listagem de terapeutas" url="{{ url('/terapeuta/list') }}" cor="#f39c12" icone="body"></caixa>
            </div>
        </div>
       </painel>         
        </div>
    </div>
</div>
@endsection
