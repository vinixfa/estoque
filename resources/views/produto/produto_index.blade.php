<!-- resources/views/produto.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forúm da Beleza')
 
@section('content_header')
  <h1 style="text-align: center">Produtos</h1>
   
@stop
     


@section('content')
    <script>
      function ConfirmDelete() {
          return confirm('Tem certeza que deseja excluir este registro?');
      }
    </script>
@if (session('status'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
   
@endif
      <div class="container col-8">


<a class="btn btn-primary" href="{{ url('produto/create') }}">CRIAR</a>


      <table class="table  no-margin">
        <thead>
      <tr>
         <th>ID</th>
         <th>Categoria</th>
         <th>Nome</th>
         <th>Quantidade</th>
         <th>Valor</th>
         
         <th></th>
         <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($produtos as $key=> $value)
    
      <tr>
         <td>{{ $value->id            }}</td>
         <td>{{ $value->categoria->nome}}</td>
         <td>{{ $value->nome          }}</td>
         <td>{{ $value->quantidade    }}</td>
         <td>{{ $value->valor         }}</td>
         <td><a class="btn btn-info" href="{{ URL::to('produto/' . $value->id) }}">Visualizar</a></td> 
         <td><a class="btn btn-warning" href="{{ URL::to('produto/' . $value->id . '/edit') }}"> editar</a></td>
         <td>
          {!! Form::open(['url' => 'produto/' . $value->id, 'method' => 'delete']) !!}
          {{ Form::hidden('_method', 'DELETE') }}
          {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
          {!! Form::close() !!}

        </td>
      </tr>


      @endforeach


    </tbody>
    </table>
@endsection