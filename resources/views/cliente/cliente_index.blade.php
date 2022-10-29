<!-- resources/views/cliente.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forúm da Beleza')
 
@section('content_header')
  <h1 style="text-align: center">Cliente</h1>
   
@stop
     


@section('content')
    <script>
      function ConfirmDelete() {
          return confirm('Tem certeza?');
      }
    </script>
@if (session('status'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
   
@endif
      <div class="container col-8">


<a class="btn btn-primary" href="{{ url('cliente/create') }}">CRIAR</a>

    
      <table class="table  no-margin">
        <thead>
      <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>E-mail</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($clientes as $value)
    
      <tr>
        <td>{{ $value->id}}</td>
        <td>{{ $value->nome}}</td>
        <td>{{ $value->cpf}}</td>
        <td>{{ $value->telefone}}</td>
        <td>{{ $value->email}}</td>
        <td><a class="btn btn-info" href="{{ URL::to('cliente/' . $value->id) }}">Visualizar</a></td> 
        <td><a class="btn btn-warning" href="{{ URL::to('cliente/' . $value->id . '/edit') }}"> editar</a></td>
        <td>
         {!! Form::open(['url' => 'cliente/' . $value->id, 'method' => 'delete']) !!}
         {{ Form::hidden('_method', 'DELETE') }}
         {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
         {!! Form::close() !!}

       </td>
     </tr>


     @endforeach


   </tbody>
   </table>
@endsection