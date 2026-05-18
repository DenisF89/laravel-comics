{{-- Componente card con la sua struttura html.
Posso utilizzare le variabili passate al componente card tramite attributi: $titolo, $thumb e $index. --}}

<div class="card h-100">
    <a  href="{{ route('comic', ['id' => $index]) }}"       {{-- link alla pagina comic, con passaggio dell'id tramite parametro --}}
        class="text-decoration-none text-reset">

        <img src="{{ $thumb }}" alt="{{ $titolo }}" class="card-img-top img-custom">

        <div class="card-body">
            <h5>{{ $titolo }}</h5>
        </div>
    </a>
</div>
