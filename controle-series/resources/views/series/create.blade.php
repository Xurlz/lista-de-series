<x-layout title="Nova Série">
    <form action="/series/save" method="post">
        @csrf
        <label for="name" class="form-label">Nome:</label>
        <div class="input-group">
            <input type="text" id="name" name="name" class="input-group-text" />
            <button type="submit" class="btn btn-outline btn-outline-primary">Adicionar</button>
        </div>
    </form>
</x-layout>
