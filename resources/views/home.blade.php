@extends('layouts.app')

@section('content')
<div class="container">
@include('flash::message')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}                       
                        </div>
                    @endif

                     Bem vindo
                    <br> <br>
                    <hr>
                            <strong>Usuário comum</strong> <br>
                            <a href="{{ url('/terapeuta') }}">Registrar Terapeuta</a> |               
                            <a href="/terapeuta/{{$terapeuta_id}}/editForm">Editar Terapeuta</a>   | 
                            <a href="/terapeuta/{{$terapeuta_id}}/vincular">Vincular Especialidade</a> 
                            <hr>
                            <strong>Usuário administrador</strong> <br>
                            <a href="{{ url('/usuarios') }}">Usuários</a> | 
                            <a href="{{ url('/terapias') }}">Especialidades</a> | 
                            <a href="{{ url('/terapeuta/list') }}">Listagem de terapeutas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
