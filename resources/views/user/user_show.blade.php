<!-- resources/views/user.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>user - Show </p>
@endsection

@section('content')
      <p>Conteúdo</p>

      <p><strong>ID:</strong> {{ $user->id}}</p>
      <p><strong>Nome:</strong> {{ $user->nome}}</p>
      <p><strong>CPF:</strong> {{ $user->cpf}}</p>
      <p><strong>Telefone:</strong> {{ $user->telefone}}</p>
      <p><strong>E-mail:</strong> {{ $user->email}}</p>

      

    
@endsection