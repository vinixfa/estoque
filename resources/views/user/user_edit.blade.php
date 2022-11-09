<!-- resources/views/user.create.php -->
 
@extends('adminlte::page')

@section('title', 'Forúm da Beleza - Editar produtos')

@section('content_header')
    <h1 style="text-align: center">Editar Usuário</h1>
@stop

@section('content')
  
      <div class="row">
      <div class="col-4">
      {!! Form::open(['url' => 'user/' . $user->id, 'method' => 'put']) !!}
      </div>
<div class="col-4">
      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('name', $user->name ['class' => 'form-control']) }} <br><br>
</div>
<div class="col-2">
      {{  Form::label('cpf', 'CPF:') }} <br>
      {{  Form::text('cpf',  $user->cpf ['class' => 'form-control']) }} <br><br>
</div>
<div class="col-2">
      {{  Form::label('telefone', 'Telefone:') }} <br>
      {{  Form::text('telefone',  $user->telefone ['class' => 'form-control']) }} <br><br>
</div>
<div class="col-2">
      {{  Form::label('email', 'E-mail:') }} <br>
      {{  Form::text('email',  $user->email) }} <br><br>
</div>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
      <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@endsection