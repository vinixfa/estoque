<!-- resources/views/servico.create.php -->
 
@extends('adminlte::page')

@section('title', 'Forúm da Beleza - Editar Serviços')

@section('content_header')
    <h1 style="text-align: center">Editar Serviço</h1>
@stop

@section('content')

<div class="container col-8">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{ Form::model($servico,array('route' => array('servico.update', $servico->id), 'method' => 'PUT'))}}
    <div class="row">
      <div class="col-6">
      {{  Form::label('nome', 'Nome') }} <br>
      {{  Form::text('nome', $servico->nome , ['class' => 'form-control']) }} <br><br>
      </div>
      <div class="col-6">
      {{  Form::label('servico', 'Servicos') }} <br>
      {{  Form::text('servico',  $servico->servico , ['class' => 'form-control']) }} <br><br>
      </div>
      <div class="col-6">
      {{  Form::label('profissional', 'Profissional') }} <br>
      {{  Form::text('profissional',  $servico->profissional , ['class' => 'form-control']) }} <br><br>
      </div>
     
      <div class="col-6">
      {{  Form::label('valor', 'Valor') }} <br>
      {{  Form::text('valor',  $servico->valor , ['class' => 'form-control']) }} <br><br>
      </div>

      <div class="col-6">
        {{  Form::label('agendamento', 'Agendamento') }} <br>
        {{  Form::date('agendamento',  $servico->agendamento , ['class' => 'form-control']) }} <br><br>
        </div>

      <div class="col-6">
      {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
    <a class="btn btn-primary " href="{{URL::to('produto/')}}">Voltar</a>
    {{ Form::close()  }}
      </div>
    </div>
    
@endsection
