<!-- resources/views/produto.show.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forúm da Beleza')
 
  @section('content_header')
 <h1 style="text-align: center">Produtos</h1>


@endsection

@section('content')
     
  <div class="container col-8">

      <p><strong>Id:</strong> {{ $produto->id                   }}</p>
      <p><strong>Categoria:</strong> {{ $produto->categoria->nome}}</p>
      <p><strong>Nome:</strong> {{ $produto->nome              }}</p>
      <p><strong>Quantidade:</strong> {{ $produto->quantidade  }}</p>
      <p><strong>Criação:</strong> {{ $produto->created_at     }}</p>

      <a class="btn btn-primary " href="{{URL::to('produto/')}}">Voltar</a>
  </div>

      
@endsection