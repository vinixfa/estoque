<!-- resources/views/cliente.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Cliente - Edit</p>
@endsection

@section('content')
      <p>Formulário</p>

      {!! Form::open(['url' => 'cliente/' . $cliente->id, 'method' => 'put']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('nome', $cliente->nome) }} <br><br>

      {{  Form::label('cpf', 'CPF:') }} <br>
      {{  Form::text('cpf',  $cliente->cpf) }} <br><br>

      {{  Form::label('telefone', 'Telefone:') }} <br>
      {{  Form::text('telefone',  $cliente->telefone) }} <br><br>

      {{  Form::label('email', 'E-mail:') }} <br>
      {{  Form::text('email',  $cliente->email) }} <br><br>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection