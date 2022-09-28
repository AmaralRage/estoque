<!-- resources/views/tema.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p> Tema - Index </p>
@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
       {{ session('status') }}
    </div>
@endif

<a href="{{ url('tema/create') }}">CRIAR</a>

      <p> Conteúdo </p>

    <table>
      <tr>
         <th>nome</th>
         <th>descrição</th>
         <th> </th>
      </tr>

      @foreach ($temas as $value)
    
      <tr>
         <td>{{ $value->nome          }}</td>
         <td>{{ $value->quantidade    }}</td>
         <td>{{ $value->         }}</td>
         <td><a href="{{ url('tema/' . $value->id) }}">Visualizar</a></td> 
         <td><a href="{{ url('tema/' . $value->id . '/edit') }}">Editar</a></td>
         <td>
          {!! Form::open(['url' => 'tema/' . $value->id, 'method' => 'delete']) !!}
          {{  Form::submit('Deletar') }}
    
          {!! Form::close() !!}

        </td>
      </tr>
      @endforeach

    </table>
@endsection
