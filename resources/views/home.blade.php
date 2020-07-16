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
                            <a href="{{ url('/terapeuta') }}">Registrar Terapeuta</a> | 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
