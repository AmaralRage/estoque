<!-- resources/views/tema.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Tema - Show </p>
@endsection

@section('content')
      <p>Conteúdo</p>

      <p><strong>id:</strong> {{ $tema->id                  }}</p>
      <p><strong>nome:</strong> {{ $tema->nome              }}</p>
      <p><strong>descrição:</strong> {{ $tema->descrição  }}</p>
      <p><strong> :</strong> R$ {{ $tema->         }}</p>
      <p><strong>criação:</strong> {{ $tema->created_at     }}</p>

    
@endsection
