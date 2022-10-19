<!-- resources/views/servico.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p> Servico - Index </p>
@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
       {{ session('status') }}
    </div>
@endif

<a href="{{ url('servico/create') }}">CRIAR</a>

      <p> Conteúdo </p>

    <table>
      <tr>
         <th>id</th>
         <th>nome</th>

         <th>valor</th>

         <th></th>
         <th></th>
      </tr>

      @foreach ($servicos as $value)
    
      <tr>
        <td>{{ $value->id          }}</td>
        <td>{{ $value->nome          }}</td>

        <td>{{ $value->valor         }}</td>

         <td><a href="{{ url('servico/' . $value->id) }}">Visualizar</a></td> 
         <td><a href="{{ url('servico/' . $value->id . '/edit') }}">Editar</a></td>
         <td>
          {!! Form::open(['url' => 'servico/' . $value->id, 'method' => 'delete']) !!}
          {{  Form::submit('Deletar') }}
    
          {!! Form::close() !!}

        </td>
      </tr>
      @endforeach

    </table>
@endsection
