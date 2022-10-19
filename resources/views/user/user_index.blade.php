<!-- resources/views/user.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p> user - Index </p>
@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
       {{ session('status') }}
    </div>
@endif

<a href="{{ url('user/create') }}">CRIAR</a>

      <p> Conteúdo </p>

    <table>
      <tr>
         <th>ID</th>
         <th>Nome</th>
         <th>CPF</th>
         <th>Telefone</th>
         <th>E-mail</th>
         <th></th>
      </tr>

      @foreach ($users as $value)
    
      <tr>
        <td>{{ $value->id}}</td>
        <td>{{ $value->name}}</td>
        <td>{{ $value->cpf}}</td>
        <td>{{ $value->telefone}}</td>
        <td>{{ $value->email}}</td>
         <td><a href="{{ url('user/' . $value->id) }}">Visualizar</a></td> 
         <td><a href="{{ url('user/' . $value->id . '/edit') }}">Editar</a></td>
         <td>
          {!! Form::open(['url' => 'user/' . $value->id, 'method' => 'delete']) !!}
          {{  Form::submit('Deletar') }}
    
          {!! Form::close() !!}

        </td>
      </tr>
      @endforeach

    </table>
@endsection