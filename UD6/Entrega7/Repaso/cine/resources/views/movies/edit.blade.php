<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editar: {{ $movie->title }}</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow rounded">
                <form method="POST" action="{{ route('movies.update', $movie) }}" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block font-medium">Título</label>
                        <input name="title" value="{{ old('title', $movie->title) }}" class="w-full border rounded p-2">
                        @error('title') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block font-medium">Año</label>
                        <input name="year" value="{{ old('year', $movie->year) }}" class="w-full border rounded p-2">
                        @error('year') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block font-medium">Género</label>
                        <input name="genre" value="{{ old('genre', $movie->genre) }}" class="w-full border rounded p-2">
                        @error('genre') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="block font-medium">Sinopsis</label>
                        <textarea name="synopsis" class="w-full border rounded p-2" rows="4">{{ old('synopsis', $movie->synopsis) }}</textarea>
                        @error('synopsis') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex gap-3">
                        <button class="px-4 py-2 bg-gray-800 text-white rounded">Actualizar</button>
                        <a class="px-4 py-2 bg-gray-200 rounded" href="{{ route('movies.show', $movie) }}">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
