<!-- resources/views/profissional.index.php -->
 
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

<a href="{{ url('profissional/create') }}">CRIAR</a>

      <p> Conteúdo </p>

    <table>
      <tr>
         <th>nome</th>
         <th></th>
         <th></th>
         <th></th>
      </tr>

      @foreach ($profissionais as $value)
    
      <tr>
        <td>{{ $value->id          }}</td>
        <td>{{ $value->nome          }}</td>
      
         <td><a href="{{ url('profissional/' . $value->id) }}">Visualizar</a></td> 
         <td><a href="{{ url('profissional/' . $value->id . '/edit') }}">Editar</a></td>
         <td>
          {!! Form::open(['url' => 'profissional/' . $value->id, 'method' => 'delete']) !!}
          {{  Form::submit('Deletar') }}
    
          {!! Form::close() !!}

        </td>
      </tr>
      @endforeach

    </table>
@endsection