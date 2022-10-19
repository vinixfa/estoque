<!-- resources/views/profissional.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Produto - Edit</p>
@endsection

@section('content')
      <p>Formulário</p>

      {!! Form::open(['url' => 'profissional/' . $profissional->id, 'method' => 'put']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('nome', $profissional->nome) }} <br><br>
   
      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection