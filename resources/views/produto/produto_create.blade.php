<!-- resources/views/produto.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forúm da Beleza - Criando produto')
 
@section('content_header')
    
      <h1 style="text-align: center">Criação de Produto</h1>
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

      {!! Form::open(['url' => 'produto/create']) !!}
      <div class="row">
         <div class="col-4">
      {{  Form::label('categoria', 'Categoria') }} <br>
      {{  Form::select('categoria_id',$categorias, null, array('class' =>'form-control')) }} <br><br>
         </div>
      <div class="col-6">
      {{  Form::label('nome', 'Nome') }} <br>
      {{ Form::text('nome', null , ['class' => 'form-control', 'placeholder' => 'Nome do produto'] )}}<br><br>
      </div>
      <div class="col-6">
      {{  Form::label('quantidade', 'Quantidade') }} <br>
      {{  Form::text('quantidade', null, ['class' => 'form-control']) }} <br><br>
      </div>
      <div class="col-1">
      {{  Form::label('valor', 'Valor') }} <br>
      {{ Form::number('valor', null , ['class' => 'form-control ' ,'step'=> 'any', 'placeholder' => 'R$'] ) }}  <br><br>
         </div>
      </div>
      {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
      <a class="btn btn-primary " href="{{URL::to('produto/')}}">Voltar</a>

      {!! Form::close() !!}
    


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop