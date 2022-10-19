<!-- resources/views/usuario.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Usuario - Edit</p>
@endsection

@section('content')
      <p>Formulário</p>

      {!! Form::open(['url' => 'usuario/' . $usuario->id, 'method' => 'put']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('nome', $usuario->nome) }} <br><br>

      {{  Form::label('cpf', 'CPF:') }} <br>
      {{  Form::text('cpf',  $usuario->quantidade) }} <br><br>

      {{  Form::label('telefone', 'Telefone:') }} <br>
      {{  Form::text('telefone',  $usuario->valor) }} <br><br>

      {{  Form::label('email', 'E-mail:') }} <br>
      {{  Form::text('email',  $usuario->valor) }} <br><br>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection