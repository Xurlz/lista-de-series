<x-layout title="Séries">
    <ul class="list-group">
        <a href="/series/create" class="list-group-item list-group-item-action list-group-item-dark ">Adicionar</a>
        @foreach ($series as $serie)
            <li class="list-group-item">{{ $serie->name }}</li>
        @endforeach
    </ul>
</x-layout>
