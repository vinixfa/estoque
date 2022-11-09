<!-- resources/views/user.index.php -->
 
 
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

<a  class="btn btn-primary" href="{{ url('user/create') }}">CRIAR</a>

    

<table class="table  no-margin">
  <thead>
      <tr>
         <th>ID</th>
         <th>Nome</th>
         <th>CPF</th>
         <th>Telefone</th>
         <th>E-mail</th>
         <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $value)
    
      <tr>
        <td>{{ $value->id}}</td>
        <td>{{ $value->name}}</td>
        <td>{{ $value->cpf}}</td>
        <td>{{ $value->telefone}}</td>
        <td>{{ $value->email}}</td>
         <td><a  class="btn btn-info" href="{{ url('user/' . $value->id) }}">Visualizar</a></td> 
         <td><a  class="btn btn-warning" href="{{ url('user/' . $value->id . '/edit') }}">Editar</a></td>
         <td>
          {!! Form::open(['url' => 'user/' . $value->id, 'method' => 'delete']) !!}
          {{ Form::hidden('_method', 'DELETE') }}
          {{ Form::submit('Excluir', array('class' => 'btn btn-danger')) }}
          {!! Form::close() !!}
          {!! Form::close() !!}

        </td>
      </tr>
      @endforeach
    </tbody>
    </table>
@endsection