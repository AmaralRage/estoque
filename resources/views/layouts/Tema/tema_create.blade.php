<!-- resources/views/tema.create.php -->
 
@extends ( ' adminlte::page ' )
 
@section ( ' título ' , ' título da página ' )
 
@section ( ' barra lateral ' )
    @pai
 
      < p >Tema - Criar</ p >
@endsection

@section ( ' conteúdo ' )
      < p >Formulário</ p >

      @if ( $ erros -> qualquer () )
      < div  class = " alerta alerta-perigo " >
         < ul >
            @foreach ( $errors -> all () as  $error )
                < li > {{ $erro  } } </ li >
            @endforeach
         </ ul >
      </ div >
      @fim se

      {!! Form :: open ([ ' url '  =>  ' tema/create ' ]) ! !}

      { {   Form :: label ( ' nome ' , ' Nome : ' ) } } <br>
      {{   Formulário :: texto ( ' nome ' ) } } < br >< br >

      { {   Form :: label ( ' descrição ' , ' Descrição : ' ) } } <br>
      {{   Formulário :: texto ( ' descrição ' ) } } < br >< br >

      { {   Form :: label ( ' ' , ' ' ) } } <br> _
      {{   Formulário :: texto ( ' ' ) } } < br >< br >

      {{   Formulário :: enviar ( ' Enviar ' ) } }

      {!! Formulário :: fechar () ! !}
    
@endsection
