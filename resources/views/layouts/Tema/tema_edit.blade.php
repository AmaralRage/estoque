<!-- resources/views/tema.edit.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Tema - Edit</p>
@endsection

@section('content')
      <p>Formulário</p>

      {!! Form::open(['url' => 'tema/' . $tema->id, 'method' => 'put']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('nome', $tema->nome) }} <br><br>

      {{  Form::label('descrição', 'Descrição:') }} <br>
      {{  Form::text('descrição',  $tema->descrição) }} <br><br>

      {{  Form::label('', ':') }} <br>
      {{  Form::text('',  $tema->valor) }} <br><br>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection
