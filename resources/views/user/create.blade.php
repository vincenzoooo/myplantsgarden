<x-app>
    <div class="container">
        <div class="columns-auto">
            <h1>Nuovo utente</h1>
            <form method="POST" action="/user" class="flex flex-col">
                @csrf
                <label for="name">username</label>
                <input type="text" id="u" name="name" class="shadow-sm border rounded-sm">
                <label for="email">email</label>
                <input type="email" id="e" name="email" class="shadow-sm border rounded-sm">
                <label for="password">Password</label>
                <input type="text" id="p" name="password" class="shadow-sm border rounded-sm">
                <button type="submit" class="border rounded-sm">Salva</button>
            </form>
        </div>
    </div>
</x-app>