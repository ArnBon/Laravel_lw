<div>
    <h1> Listado de artículos </h1>
    {{-- <h2>Categoría: @json($category) </h2>
    <h2>Etiquetas: @json($tags) </h2>

    <select wire:model="tags" multiple>
        <option value="">Seleccione...</option>
        <option value="tag1">Tag 1</option>
        <option value="tag2">Tag 2</option>
    </select>

    <label>
        tag 1
    <input wire:model="tags" type="checkbox" value="tag1">
    </label>

    <label>
        tag 2
    <input wire:model="tags" type="checkbox" value="tag2">
    </label>

    <input wire:model="category.name" type="text" placeholder="Categoría..."> --}}

    {{-- <input wire:model="category" type="text" placeholder="Categoría...">
    <input wire:model.debounce.5s="category" type="text" placeholder="Categoría...">
    <input wire:model.lazy="category" type="text" placeholder="Categoría...">
    <input wire:model.defer="category" type="text" placeholder="Categoría..."> --}}

    <input wire:model="search" type="text" placeholder="Buscar...">

    {{-- <input wire:model="show" type="checkbox" value="tag1"> --}}
    {{-- @if($show) --}}
    <ul>
        @foreach($articles as $article)
        <li>{{ $article->title }}</li>
        @endforeach
    </ul>
    {{-- @endif --}}
</div>

