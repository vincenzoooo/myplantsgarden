<x-app>
    <div class="container">
        <div class="columns-auto">
            <h1>Dati pianta</h1>
            <input type="hidden" name="id" value="{{$plant->id}}">
            <label for="name">Nome</label>
            <input type="text" id="n" name="name" class="shadow-sm border rounded-sm" value="{{$plant->name}}">
            <label for="description">Descrizione</label>
            <input type="text" id="d" name="description" class="shadow-sm border rounded-sm" value="{{$plant->description}}">
            <label for="family">Famiglia</label>
            <select id="f" name="family_id" class="shadow-sm border rounded-sm">
                <option value="1"@if ($plant->family_id == 1) selected@endif>Test</option>
            </select>
        </div>
    </div>
</x-app>