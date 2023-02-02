@extends('layouts.principal')
@section('title', 'Pokedex | Home')
@section('contenido')
<a href="{{ route('pokemon.list') }}" class="btn btn-primary mt-2 ms-2">Lista Pokemons</a>
@endsection