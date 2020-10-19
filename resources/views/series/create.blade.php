@extends('layout')

@section('cabecalho')
🎞Adicionar Série
@endsection('cabecalho')

@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method='post'>
    @csrf
    <div class="input-group">
        <input type="text" class='form-control' name='nome'>
    </div>
    
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection('conteudo')
