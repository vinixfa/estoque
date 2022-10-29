<!-- resources/views/cliente.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forúm da Beleza - Criando Cliente')
 
@section('content_header')
    
      <h1 style="text-align: center">Editar Cliente</h1>
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

      {!! Form::open(['url' => 'cliente/' . $cliente->id, 'method' => 'put']) !!}
      <div class="row">
            <div class="col-6">
      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('nome', $cliente->nome,['class' => 'form-control']) }} <br><br>
            </div>
            <div class="col-6">
      {{  Form::label('cpf', 'CPF:') }} <br>
      {{  Form::text('cpf',  $cliente->cpf, ['class' => 'form-control']) }} <br><br>
            </div>
            <div class="col-6">
      {{  Form::label('telefone', 'Telefone:') }} <br>
      {{  Form::text('telefone',  $cliente->telefone , ['class' => 'form-control']) }} <br><br>
            </div>
            <div class="col-6">
      {{  Form::label('email', 'E-mail:') }} <br>
      {{  Form::text('email',  $cliente->email , ['class' => 'form-control']) }} <br><br>
            </div>
      </div>

     {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
    <a class="btn btn-primary " href="{{URL::to('produto/')}}">Voltar</a>
    {{ Form::close()  }}
    
    
    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@endsection