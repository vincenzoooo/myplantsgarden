<x-app>
    <div class="container">
        <div class="columns-auto">
            <h1>Accedi</h1>
            <form method="POST" action="/login" class="flex flex-col">
                @csrf
                <label for="email">Email</label>
                <input type="email" id="e" name="email" autocomplete="off" class="shadow-sm border rounded-sm">
                <label for="password">Password</label>
                <input type="password" id="p" name="password" class="shadow-sm border rounded-sm">
                <button type="submit">Accedi</button>
            </form>
        </div>
    </div>
</x-app>