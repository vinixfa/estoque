<!-- resources/views/produto.edit.php -->
 
@extends('adminlte::page')

@section('title', 'Forúm da Beleza - Editar produtos')

@section('content_header')
    <h1 style="text-align: center">Produtos</h1>
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

    
    {{ Form::model($produto,array('route' => array('produto.update', $produto->id), 'method' => 'PUT')) }}

    <div class="row">
        <div class="col-6">
            {{ Form::label('nome', 'Nome do produto') }}
            {{ Form::text('nome', $produto->nome , ['class' => 'form-control'] )}}
        </div>
        <div class="col-6">
            {{ Form::label('categoria', 'Categoria' , ['class' => 'form-select ']) }} 
            {{ Form::select('categoria_id', $categorias, array('class' => 'form-control ')) }} 
        </div>
        <div class="col-12">
            {{ Form::label('quantidade', 'Quantidade' , ['class' => ' '] ) }}
            {{ Form::text('quantidade', $produto->quantidade  , ['class' => 'form-control  '] ) }}
        </div>
        <div class="col-4">
            {{ Form::label('valor', 'valor') }}
            {{ Form::number('valor', $produto->valor , ['class' => 'form-control ' ,'step'=> 'any'] ) }} 
        </div>
       
    </div>
    {{ Form::submit('Enviar' , ['class' => 'btn btn-outline-success mt-2 mb-2']) }}
    <a class="btn btn-primary " href="{{URL::to('produto/')}}">Voltar</a>
    {{ Form::close()  }}



</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
