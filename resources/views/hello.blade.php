@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Hello {{ $name }} </h1>

    @isset($teste)
        {{ $teste }}
    @endisset

    <form action="" method="post">
       {{ csrf_field() }}
       <input type="text" name="teste">
       <input type="submit" value="enviar">
    </form>
</div>
@endsection

@section('title')
Página Hello World
@endsection