<!-- resources/views/servico.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forúm da Beleza - Criando Seviço')
 
@section('content_header')
    
      <h1 style="text-align: center">Serviços</h1>
@stop
 
    

@section('content')
      

      <div class="container col-8">
      <p><strong>Id:</strong> {{ $servico->id                     }}</p>
      <p><strong>Nome:</strong> {{ $servico->nome                 }}</p>
      <p><strong>Serviço:</strong> {{ $servico->servico           }}</p>
      <p><strong>Profissional:</strong> {{ $servico->profissional }}</p>
      <p><strong>Valor:</strong> R$ {{ $servico->valor            }}</p>
      <p><strong>Agendamento:</strong> {{ $servico->agendamento   }}</p>
      <p><strong>Criação:</strong> {{ $servico->created_at        }}</p>

      <a class="btn btn-primary " href="{{URL::to('servico/')}}">Voltar</a>
      </div>
@endsection
