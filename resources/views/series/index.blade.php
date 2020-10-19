@extends('layout')

@section('cabecalho')
🎞Séries
@endsection('cabecalho')

@section('conteudo')
<a href="series/criar" class="btn btn-dark mb-2">Adicionar</a>

@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<ul class="list-group">
    @foreach($series as $serie)
    <li class="list-group-item">{{$serie->nome}}</li>
    @endforeach
</ul>
@endsection('conteudo')    
