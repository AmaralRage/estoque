<!-- resources/views/produto.index.blade.php -->

@extends('adminlte::page')
{{--@extends('layouts.app')--}}
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>Produto - show</p>
@endsection
 
@section('content')
    <p>Conteúdo</p>

    <p><strong>ID:</strong> {{ $produto->id }}</p>
    <p><strong>Categoria:</strong> {{ $produto->categoria->nome }}</p>
    <p><strong>Nome:</strong> {{ $produto->nome }}</p>
    <p><strong>Quantidade:</strong> {{ $produto->quantidade }}</p>
    <p><strong>Valor:</strong> R$ {{ $produto->valor }}</p>
    <p><strong>Criação:</strong> {{ $produto->created_at }}</p>

   

@endsection