<!-- resources/views/cliente.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forúm da Beleza - Criando Cliente')
 
@section('content_header')
    
      <h1 style="text-align: center">Criação de Cliente</h1>
@stop
 
    

@section('content')
      
      <div class="container col-8">

      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error }}</li>
            @endforeach
         </ul>
      </div>
      @endif

      {!! Form::open(['url' => 'cliente/create']) !!}
 <div class="row">
         <div class="col-4">
      {{  Form::label('nome', 'Nome') }} <br>
      {{  Form::text('nome', null , ['class' => 'form-control']) }} <br><br>
         </div>
         <div class="col-4">
      {{  Form::label('cpf', 'CPF') }} <br>
      {{  Form::text('cpf', null , ['class' => 'form-control']) }} <br><br>
         </div>
         <div class="col-4">
      {{  Form::label('telefone', 'Telefone') }} <br>
      {{  Form::text('telefone', null , ['class' => 'form-control']) }} <br><br>
         </div>
         <div class="col-4">
      {{  Form::label('email.', 'E-mail') }} <br>
      {{  Form::text('email', null , ['class' => 'form-control']) }} <br><br>
         </div>
         </div>
         <div class="col-2">
            {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
            <a class="btn btn-primary " href="{{URL::to('produto/')}}">Voltar</a>
            </div>
         {!! Form::close() !!}
    
         @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@endsection