@props(['nombre', 'etiqueta', 'tipo' => 'text'])

<div>
  <label for="{{ $nombre }}">{{ $etiqueta }}</label>
  <br>
  <input type="{{ $tipo }}" id="{{ $nombre }}" name="{{ $nombre }}" value="{{ old($nombre) }}">
</div>