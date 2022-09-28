<!-- resources/views/produto.index.blade.php -->

@extends('adminlte::page')
{{--@extends('layouts.app')--}}
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
    <p>Produto - Create</p>
@endsection
 
@section('content')
    <p>Formulário</p>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['url' => 'produto/create']) !!}

    {{ Form::label('categoria', 'Categoria') }}<br>
    {{ Form::select('categoria_id', $categorias) }}<br>
    

    {{ Form::label('nome', 'Nome:') }}<br>
    {{ Form::text('nome') }}<br>

    {{ Form::label('quantidade', 'Quantidade:') }}<br>
    {{ Form::text('quantidade') }}<br>

    {{ Form::label('valor', 'Valor:') }}<br>
    {{ Form::text('valor') }}<br>

    {{ Form::submit('Enviar') }}

    {!! Form::close() !!}

@endsection