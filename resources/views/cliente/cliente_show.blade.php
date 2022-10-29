<!-- resources/views/clientes.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forúm da Beleza')
 
  @section('content_header')
 <h1 style="text-align: center">Produtos</h1>


@endsection

@section('content')
     
  <div class="container col-8">

      <p><strong>ID:</strong>       {{$cliente->id}}</p>
      <p><strong>Nome:</strong>     {{$cliente->nome}}</p>
      <p><strong>CPF:</strong>      {{$cliente->cpf}}</p>
      <p><strong>Telefone:</strong> {{$cliente->telefone}}</p>
      <p><strong>E-mail:</strong>   {{$cliente->email}}</p>
      <a class="btn btn-primary " href="{{URL::to('produto/')}}">Voltar</a>
</div>
    
@endsection