<!-- resources/views/usuario.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Usuario - Show </p>
@endsection

@section('content')
      <p>Conteúdo</p>

      <p><strong>ID:</strong>       {{ $usuario->id}}</p>
      <p><strong>Nome:</strong>     {{ $usuario->nome}}</p>
      <p><strong>CPF:</strong>      {{ $usuario->cpf}}</p>
      <p><strong>Telefone:</strong> {{ $usuario->telefone}}</p>
      <p><strong>E-mail:</strong>   {{ $usuario->email}}</p>

      

    
@endsection