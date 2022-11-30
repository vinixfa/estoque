<!-- resources/views/servico.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forúm da Beleza - Criando serviço')
 
@section('content_header')
    
      <h1 style="text-align: center">Criar Serviço</h1>
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
      {!! Form::open(['url' => 'servico/create']) !!}
      <div class="row">
         <div class="col-4">
     
      {{  Form::label('nome', 'Nome') }} <br>
      {{  Form::text('nome',  null, ['class' => 'form-control']) }} <br><br>
         </div>

         <div class="col-6">
            {{  Form::label('servico', 'Serviços') }} <br>
            {{  Form::text('servico', null, ['class' => 'form-control']) }} <br><br>
         </div>

         <div class="col-6">
            {{  Form::label('profissional', 'Profissional') }} <br>
            {{  Form::text('profissional' , null , ['class' => 'form-control']) }} <br><br>
         </div>
         
         <div class="col-1">
      {{  Form::label('valor', 'Valor') }} <br>
      {{  Form::number('valor', null , ['class' => 'form-control ' ,'step'=> 'any', 'placeholder' => 'R$']) }} <br><br>
         </div>

         <div class="col-6">
            {{  Form::label('agendamento', 'Agendamento') }} <br>
            {{  Form::text('agendamento' , null , ['class' => 'form-control']) }} <br><br>
         </div>
         
      </div>
      <div class="col-2">
         {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
         <a class="btn btn-primary " href="{{URL::to('servico/')}}">Voltar</a>
         </div>
      {!! Form::close() !!}
    
@endsection
