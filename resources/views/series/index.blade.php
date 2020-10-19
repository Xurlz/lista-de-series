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
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{$serie->nome}}
        <form method='post' action="series/{{$serie->id }}"
        onsubmit = 'return confirm("tem certeza que quer remover {{ $serie->nome }}?")'>
            @csrf 
            @method('DELETE')
            <button class="btn-sm btn-danger">
                <i class='far fa-trash-alt'></i>
            </button>
        </form>
    </li>
    @endforeach
</ul>
@endsection('conteudo')    
