<!-- resources/views/profissional.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('content_header')
    
      <h1 style="text-align: center">Criação de Produto</h1>
 

@endsection

@section('content')
      <p>Formulário</p>

      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error }}</li>
            @endforeach
         </ul>
      </div>
      @endif

      {!! Form::open(['url' => 'profissional/create']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{ Form::text('nome', null , ['class' => 'form-control', 'placeholder' => 'Nome do produto'] )}}<br><br>
      
      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection