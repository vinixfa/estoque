<!-- resources/views/profissional.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Forúm da Beleza')
 
@section('content_header')
  <h1 style="text-align: center">Profissionais</h1>
   
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


<a class="btn btn-primary" href="{{ url('profissional/create') }}">CRIAR</a>


<table class="table  no-margin">
     
  <thead>
    <tr>
         <th>Id</th>
         <th>Nome</th>
         <th>Profissao</th>
         <th></th>
         <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($profissionais as $value)
    
      <tr>
        <td>{{ $value->id          }}</td>
        <td>{{ $value->nome          }}</td>
        <td>{{ $value->profissao          }}</td>
      
        <td><a class="btn btn-info" href="{{ URL::to('profissional/' . $value->id) }}">Visualizar</a></td> 
         <td><a class="btn btn-warning" href="{{ URL::to('profissional/' . $value->id . '/edit') }}"> editar</a></td>
         <td>
          {!! Form::open(['url' => 'profissional/' . $value->id, 'method' => 'delete']) !!}
          {{ Form::hidden('_method', 'DELETE') }}
          {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
          {!! Form::close() !!}

        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
@endsection