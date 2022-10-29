<!-- resources/views/profissional.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forúm da Beleza')
 
  @section('content_header')
 <h1 style="text-align: center">Profissionais</h1>


@endsection

@section('content')
<div class="container col-8">

      <p><strong>Id:</strong> {{ $profissional->id                  }}</p>
      <p><strong>Nome:</strong> {{ $profissional->nome              }}</p>
      <p><strong>Profissao:</strong> {{ $profissional->profissao    }}</p>
      <p><strong>Criação:</strong> {{ $profissional->created_at     }}</p>
      <a class="btn btn-primary " href="{{URL::to('profissional/')}}">Voltar</a>
</div>
    
@endsection