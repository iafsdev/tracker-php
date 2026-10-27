<x-layout titulo="Proyectos">
    <h1>Lista de proyectos</h1>

    @forelse ($proyectos as $proyecto)
        <ul>
            <li><a href="{{ route('proyectos.show', $proyecto['id']) }}">{{ $proyecto['nombre'] }}</a></li>
        </ul>
    @empty
        <p>No hay proyectos</p>
    @endforelse

    <a href="{{ route('proyectos.create') }}">Nuevo proyecto</a>
</x-layout>