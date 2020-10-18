@extends('layout')

@section('cabecalho')
🎞Adicionar Série
@endsection('cabecalho')

@section('conteudo')
<form method='post'>
    @csrf
    <div class="input-group">
        <input type="text" class='form-control' name='nome'>
    </div>
    
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection('conteudo')
