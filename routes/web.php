<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('index');
    // return view('form');
})->name('pokemon.home');

Route::get('/pokemons', function() {

    return view('list', compact('pokedex'));
})->name('pokemon.list');

Route::get('/pokemons/create', function() {
    $create = true;
    return view('form', compact('create'));
})->name('pokemon.form.create');

Route::get('/pokemons/edit', function() {
    $create = false;
    return view('form', compact('create'));
})->name('pokemon.form.edit');

Route::post('/pokemons', function() {
    return view('list');
})->name('pokemon.create');

Route::put('/pokemons/{id}', function ($id) {
    return view('list');
})->name('pokemon.edit');

Route::delete('/pokemons/{id}', function ($id) {
    return view('list');
})->name('pokemon.delete');
