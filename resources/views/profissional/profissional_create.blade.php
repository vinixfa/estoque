<!-- resources/views/profissional.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forum da Beleza -')
 
@section('content_header')
    
      <h1 style="text-align: center">Criar Profissionais</h1>
 

@endsection

@section('content')
      

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
      <div class="row">
            <div class="col-4">
      {{  Form::label('nome', 'Nome') }} <br>
      {{ Form::text('nome', null , ['class' => 'form-control', 'placeholder' => 'Nome'] )}}<br><br>
            </div>
      <div class="col-4">
            {{  Form::label('profissao', 'Profissão') }} <br>
            {{ Form::text('profissao', null , ['class' => 'form-control'] )}}<br><br>
            
      </div> <br>
     
      </div>
      <div class="col-2">
       {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
           
       <a class="btn btn-outline-primary " href="{{URL::to('profissional/')}}">Voltar</a>
       {!! Form::close() !!}
       </div>
     
      
      

      @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
@endsection