<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Películas</h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 shadow rounded">
                <div class="flex justify-end mb-4">
                    <a href="{{ route('movies.create') }}"
                       class="px-4 py-2 bg-gray-800 text-white rounded">Nueva película</a>
                </div>

                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b">
                            <th class="py-2">Título</th>
                            <th class="py-2">Año</th>
                            <th class="py-2">Género</th>
                            <th class="py-2 w-56">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($movies as $movie)
                            <tr class="border-b">
                                <td class="py-2">{{ $movie->title }}</td>
                                <td class="py-2">{{ $movie->year }}</td>
                                <td class="py-2">{{ $movie->genre }}</td>
                                <td class="py-2">
                                    <a class="underline mr-3" href="{{ route('movies.show', $movie) }}">Ver</a>
                                    <a class="underline mr-3" href="{{ route('movies.edit', $movie) }}">Editar</a>

                                    <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="underline text-red-600"
                                                onclick="return confirm('¿Borrar esta película?')">
                                            Borrar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $movies->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
