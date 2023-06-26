<x-app>
    <div class="container">
        <div class="columns-auto">
            <h1>Nuova pianta</h1>
            <form method="POST" action="/plants" class="flex flex-col">
                @csrf
                <label for="name">Nome</label>
                <input type="text" id="n" name="name" class="shadow-sm border rounded-sm">
                <label for="description">Descrizione</label>
                <input type="text" id="d" name="description" class="shadow-sm border rounded-sm">
                <label for="family">Famiglia</label>
                <select id="f" name="family_id" class="shadow-sm border rounded-sm">
                    <option value="1">Test</option>
                </select>
                <button type="submit" class="border rounded-sm">Salva</button>
            </form>
        </div>
    </div>
</x-app>