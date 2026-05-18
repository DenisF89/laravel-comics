@extends("layouts.master")                  {{-- carico il layout  --}}

@section("titolo")                          {{-- contenuto della sezione titolo inserito nel layout master --}}
    Home
@endsection


@php
    $cards = config("comics");              //prelievo informazioni da file di configurazione cards.php
    //dd($cards);                           //dd è una funzione di Laravel che permette di fare il dump di una variabile e interrompere l'esecuzione del codice, utile per il debug//equivalente di var_dump($cards) in php
@endphp

@section("contenuto")

<div class="hero"></div>

<div class="boxed boxed_main">
    <h4>CURRENT SERIES</h4>

    <div class="container">
        <div class="row row-cols-6 g-2">
        
            @foreach($cards as $card)           {{-- ciclo foreach per caricare tutte le cards --}}
            <div class="col">
            
                <x-card                         {{-- componente card, con passaggio dei dati tramite attributi --}}
                    :titolo="$card['title']"
                    :thumb="$card['thumb']"
                    :index="$loop->index"       {{-- $loop è una variabile globale del ciclo, qui restituisce l'indice dell'elemento corrente passandolo al componente card--}}
                ></x-card>
                
            </div>
            @endforeach

        </div>
    </div> 

</div>

<x-blu-menu />

@endsection



