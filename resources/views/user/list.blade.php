<x-app>
    <div class="container">
        <div class="columns-auto">
            <h1>Lista piante</h1>
            @forelse ($plants as $plant)
                <li>{{ $plant->name }}</li>
            @empty
                <p>No plants</p>
            @endforelse
        </div>
    </div>
</x-app>