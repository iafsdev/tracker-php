<x-layout titulo="Crear proyecto">
    <h1>Crear proyecto</h1>

    <form method="post" action="{{ route('proyectos.store') }}">
        @csrf
        <x-campo nombre="nombre" etiqueta="Nombre del proyecto: "/>

        <div>
          <label for="descripcion">Descripción: </label>
          <br>
          <textarea name="descripcion" id="descripcion" rows="5">{{ old('descripcion') }}</textarea>
        </div>

        <br>
        <button type="submit">Crear proyecto</button>

    </form>
</x-layout>