<!-- resources/views/user.create.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>user - Create</p>
@endsection

@section('content')
      <p>Formulário</p>

      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error }}</li>
            @endforeach
         </ul>
      </div>
      @endif

      {!! Form::open(['url' => 'user/create']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('name') }} <br><br>

      {{  Form::label('cpf', 'CPF:') }} <br>
      {{  Form::text('cpf') }} <br><br>

      {{  Form::label('telefone', 'Telefone:') }} <br>
      {{  Form::text('telefone') }} <br><br>

      {{  Form::label('email.', 'E-mail:') }} <br>
      {{  Form::text('email') }} <br><br>
      
      <div class="col-6">
         {{ Form::label('password', 'Senha:') }}
         {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Digite uma senha forte']) }}
     </div>
     <div class="col-6">
         {{ Form::label('password', 'Confirmar senha:') }}
         {{ Form::password('confirm-password', array('class' => 'form-control ', 'placeholder' => 'Digite novamente')) }}
     </div>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection