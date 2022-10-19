<!-- resources/views/categoria.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p> Produto - Index </p>
@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
       {{ session('status') }}
    </div>
@endif

<a href="{{ url('categoria/create') }}">CRIAR</a>

      <p> Conteúdo </p>

    <table>
      <tr>
         <th>nome</th>
         <th>quantidade</th>
         <th>valor</th>
         <th></th>
         <th></th>
         <th></th>
      </tr>

      @foreach ($categorias as $value)
    
      <tr>
        <td>{{ $value->id          }}</td>
        <td>{{ $value->nome          }}</td>
        <td>{{ $value->quantidade    }}</td>
        <td>{{ $value->valor         }}</td>
         <td><a href="{{ url('categoria/' . $value->id) }}">Visualizar</a></td> 
         <td><a href="{{ url('categoria/' . $value->id . '/edit') }}">Editar</a></td>
         <td>
          {!! Form::open(['url' => 'categoria/' . $value->id, 'method' => 'delete']) !!}
          {{  Form::submit('Deletar') }}
    
          {!! Form::close() !!}

        </td>
      </tr>
      @endforeach

    </table>
@endsection