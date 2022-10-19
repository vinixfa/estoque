<!-- resources/views/clientes.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Cliente - Show </p>
@endsection

@section('content')
      <p>Conteúdo</p>

      <p><strong>ID:</strong>       {{$cliente->id}}</p>
      <p><strong>Nome:</strong>     {{$cliente->nome}}</p>
      <p><strong>CPF:</strong>      {{$cliente->cpf}}</p>
      <p><strong>Telefone:</strong> {{$cliente->telefone}}</p>
      <p><strong>E-mail:</strong>   {{$cliente->email}}</p>

    
@endsection