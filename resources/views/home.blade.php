@extends("layouts.master")

    @section("titolo")
        Home
    @endsection


    @php
        //prelievo informazione da file di configurazione cards.php
        $cards = config("comics");
        //equivalente di var_dump($cards) in php
        //dd($cards);
    @endphp

    @section("contenuto")

    <div class="hero"></div>

    <div class="boxed boxed_main">
        <h4>CURRENT SERIES</h4>
    
        <div class="container">
            <div class="row row-cols-6 g-2">
            
                @foreach($cards as $card)
                <div class="col">
                
                    <x-card
                        :titolo="$card['title']"
                        :thumb="$card['thumb']"
                    ></x-card>
                    
                </div>
                @endforeach

            </div>
        </div> 
    
    </div>

    <x-blu-menu />

    @endsection

    
  
