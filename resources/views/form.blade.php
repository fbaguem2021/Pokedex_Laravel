@extends('layouts.principal')
@section('contenido')
    <div class="container">
        @if ($create)
            @include('layouts.forms.create')
        @else
            @include('layouts.forms.edit')
        @endif
    </div>
@endsection