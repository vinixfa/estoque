<!-- resources/views/user.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>user - Edit</p>
@endsection

@section('content')
      <p>Formulário</p>

      {!! Form::open(['url' => 'user/' . $user->id, 'method' => 'put']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('name', $user->name) }} <br><br>

      {{  Form::label('cpf', 'CPF:') }} <br>
      {{  Form::text('cpf',  $user->cpf) }} <br><br>

      {{  Form::label('telefone', 'Telefone:') }} <br>
      {{  Form::text('telefone',  $user->telefone) }} <br><br>

      {{  Form::label('email', 'E-mail:') }} <br>
      {{  Form::text('email',  $user->email) }} <br><br>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection