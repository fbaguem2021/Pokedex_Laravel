<div class="col mt-4">
    <div class="card border border-secondary">
        <img src='{{ asset("media/img/".$pokemon['Imagen']) }}' 
            alt='{{ $pokemon["Imagen"] }}' 
            class='card-img-top mt-2'width='50'>
        <div class="card-body">
            {{-- <p class='fw-bold'>@yield('poke.num')-@yield('poke.name')</p> --}}
            <p class='fw-bold'>{{ $pokemon['Numero'].'-'.$pokemon['Nombre'] }}</p>
            
            @foreach($pokemon['Tipo'] as $t)
                <span class="badge bg-warning">{{ $t['nombre'] }}</span>
            @endforeach

        </div>
        <div class='card-footer'>
            <div class='d-flex flex-row-reverse'>
                <form action='' method='POST'>
                    {{-- class='hidden-input' --}}
                    <input type='hidden' id='editNum' name='editNum' value='{{ $pokemon["id"] }}'>
                    <button type='submit' name='editar' class='btn btn-outline-primary justify-content-end ms-2'>
                        <i class='fa-solid fa-pen-to-square'></i>
                    </button>
                </form>
                <form action='' method='POST'>
                    <input type='hidden' id='delNum' name='delNum' value='{{ $pokemon["id"] }}'>
                    <button type='submit' name='borrar' class='btn btn-outline-danger justify-content-end me-2'>
                        <i class='fa-solid fa-trash'></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>