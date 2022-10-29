<!-- resources/views/profissional.create.php -->
 
@extends('adminlte::page')

@section('title', 'Forúm da Beleza - Editar produtos')

@section('content_header')
    <h1 style="text-align: center">Editar Profissionais</h1>
@stop

@section('content')

      {!! Form::open(['url' => 'profissional/' . $profissional->id, 'method' => 'put']) !!}
      <div class="row">
            <div class="col-4">
      {{  Form::label('nome', 'Nome') }} <br>
      {{  Form::text('nome', $profissional->nome,  ['class' => 'form-control']) }} <br><br>
            </div>
            <div class="col-4">
      {{  Form::label('profissao', 'Profissao') }} <br>
      {{  Form::text('profissao', $profissional->profissao, ['class' => 'form-control']) }} <br><br>
            </div>
        </div>
        <div class="col-2">
            {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
            <a class="btn btn-primary " href="{{URL::to('profissional/')}}">Voltar</a>
            {{ Form::close()  }}
            </div>
        @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@endsection