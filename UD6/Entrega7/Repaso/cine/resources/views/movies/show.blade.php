<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $movie->title }}</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow rounded space-y-3">
                <p><strong>Año:</strong> {{ $movie->year ?? '—' }}</p>
                <p><strong>Género:</strong> {{ $movie->genre ?? '—' }}</p>
                <p><strong>Sinopsis:</strong> {{ $movie->synopsis ?? '—' }}</p>

                <div>
                    <strong>Actores:</strong>
                    @if($movie->actors->count())
                        <ul class="list-disc ml-6">
                            @foreach($movie->actors as $actor)
                                <li>{{ $actor->name }}</li>
                            @endforeach
                        </ul>
                    @else
                        <span>—</span>
                    @endif
                </div>

                <div class="pt-4 flex gap-3">
                    <a class="px-4 py-2 bg-gray-800 text-white rounded" href="{{ route('movies.edit', $movie) }}">Editar</a>
                    <a class="px-4 py-2 bg-gray-200 rounded" href="{{ route('movies.index') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
