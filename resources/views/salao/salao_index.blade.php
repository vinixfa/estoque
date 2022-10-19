<!-- resources/views/salao.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p> Salao - Index </p>
@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
       {{ session('status') }}
    </div>
@endif

<a href="{{ url('salao/create') }}">CRIAR</a>

      <p> Conteúdo </p>

    <table>
      <tr>
        <th>id</th>
        <th>nome</th>
         <th></th>
      </tr>

      @foreach ($saloes as $value)
    
      <tr>
         <td>{{ $value->id          }}</td>
         <td>{{ $value->nome          }}</td>
         <td><a href="{{ url('salao/' . $value->id) }}">Visualizar</a></td> 
         <td><a href="{{ url('salao/' . $value->id . '/edit') }}">Editar</a></td>
         <td>
          {!! Form::open(['url' => 'salao/' . $value->id, 'method' => 'delete']) !!}
          {{  Form::submit('Deletar') }}
    
          {!! Form::close() !!}

        </td>
      </tr>
      @endforeach

    </table>
@endsection