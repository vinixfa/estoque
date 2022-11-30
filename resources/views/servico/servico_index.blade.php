<!-- resources/views/servico.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forúm da Beleza')
 
@section('content_header')
  <h1 style="text-align: center">Serviços</h1>
   
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


<a class="btn btn-primary" href="{{ url('servico/create') }}">CRIAR</a>

    
      <table class="table  no-margin">
        <thead>
      <tr>
         <th>Id</th>
         <th>Nome</th>
         <th>Serviços</th>
         <th>Profissional</th>
         <th>Valor</th>
         <th>Agendamento</th>


         <th></th>
         <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($servicos as $value)
    
      <tr>
        <td>{{ $value->id            }}</td>
        <td>{{ $value->nome          }}</td>
        <td>{{ $value->servico       }}</td>
        <td>{{ $value->profissional  }}</td>
        <td>{{ $value->valor         }}</td>
        <td>{{ $value->agendamento   }}</td>
        <td><a class="btn btn-info" href="{{ URL::to('servico/' . $value->id) }}">Visualizar</a></td> 
        <td><a class="btn btn-warning" href="{{ URL::to('servico/' . $value->id . '/edit') }}"> editar</a></td>
        <td>
         {!! Form::open(['url' => 'servico/' . $value->id, 'method' => 'delete']) !!}
         {{ Form::hidden('_method', 'DELETE') }}
         {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
         {!! Form::close() !!}

       </td>
     </tr>


     @endforeach


   </tbody>
   </table>
@endsection
