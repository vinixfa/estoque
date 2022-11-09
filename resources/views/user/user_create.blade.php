<!-- resources/views/user.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forúm da Beleza - Criando produto')
 
@section('content_header')
    
      <h1 style="text-align: center">Criação de Usuário</h1>

 
    

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

      {!! Form::open(['url' => 'user/create']) !!}

      <div class="row">
        <div class="col-4">
      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('name') }} <br><br>
        </div>
        <div class="col-4">
      {{  Form::label('cpf', 'CPF:') }} <br>
      {{  Form::text('cpf') }} <br><br>
        </div> 
        <div class="col-4">
      {{  Form::label('telefone', 'Telefone:') }} <br>
      {{  Form::text('telefone') }} <br><br>
        </div>
        <div class="col-4">
      {{  Form::label('email.', 'E-mail:') }} <br>
      {{  Form::text('email') }} <br><br>
        </div>
      <div class="col-4">
         {{ Form::label('password', 'Senha:') }}
         {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Digite uma senha forte']) }}
     </div>
     <div class="col-4">
         {{ Form::label('password', 'Confirmar senha:') }}
         {{ Form::password('confirm-password', array('class' => 'form-control ', 'placeholder' => 'Digite novamente')) }}
     </div>
      </div>
     {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
     <a class="btn btn-primary" href="{{URL::to('produto/')}}">Voltar</a>

      {!! Form::close() !!}
    
     

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@endsection