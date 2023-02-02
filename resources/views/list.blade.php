@extends('layouts.principal')
@section('title', 'Pokedex | Lista Pokemons')
@section('contenido')

<div class="container-fluid">
<div class="row row-cols-md-5 row-cols-sm-1 row-cols-xs-1">
    @forelse($pokedex as $pokemon)
    
        @include('layouts.card')

    @empty
    <div class='alert alert-primary mt-1' role='alert'>No hay ningún pokemon guardado</div>
    @endforelse
</div>
</div>

<a href="" class="floating-button fs-1 btn border-0 bg-transparent text-info">
    <!-- <i class="bi bi-plus-circle"></i> -->
    <i class="fa-solid fa-circle-plus"></i>
</a>
@endsection