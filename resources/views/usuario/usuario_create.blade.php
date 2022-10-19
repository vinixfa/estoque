<!-- resources/views/usuario.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Usuario - Create</p>
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

      {!! Form::open(['url' => 'usuario/create']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('nome') }} <br><br>

      {{  Form::label('cpf', 'CPF:') }} <br>
      {{  Form::text('cpf') }} <br><br>

      {{  Form::label('telefone', 'Telefone:') }} <br>
      {{  Form::text('telefone') }} <br><br>

      {{  Form::label('email.', 'E-mail:') }} <br>
      {{  Form::text('email') }} <br><br>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection