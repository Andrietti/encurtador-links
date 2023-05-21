<x-layout title="Novo link">
    <form action="/links/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="link" class="form-label">Link Original</label>
            <input type="text" id="longLink" name="longLink" class="form-control">
        </div>

        <div class="mb-5">
            <label for="short" class="form-label">Link encurtado</label>
            <input type="text" id="shortLink" name="shortLink" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
