@extends('layouts.master')

@section('titolo')
    {{ $comic['title'] }}           // recupero titolo del comic passata alla vista e lo inserisco nella sezione titolo del layout
@endsection

@section('contenuto')

    <div class="container my-4">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid">
            </div>
            <div class="col-md-8 comic-details">
                <h3>{{ $comic['title'] }}</h3>
                <p>{{ $comic['series'] }} — <strong>{{ $comic['price'] }}</strong></p>
                <p>{{ $comic['description'] }}</p>
                <p><strong>Sale date:</strong> {{ $comic['sale_date'] }}</p>
                <p><strong>Type:</strong> {{ $comic['type'] }}</p>
                <p><strong>Artists:</strong>
                    @foreach($comic['artists'] ?? [] as $artist)                        {{--  operatore ?? [] se artists non è definito usa array vuoto --}}
                        <span class="badge bg-secondary me-1">{{ $artist }}</span>
                    @endforeach
                </p>

                <p><strong>Writers:</strong>
                    @foreach($comic['writers'] ?? [] as $writer)
                        <span class="badge bg-secondary me-1">{{ $writer }}</span>
                    @endforeach
                </p>

                <a href="{{ route('home') }}" class="btn btn-outline-primary">Torna alla Home</a> {{-- link alla home page tramite l'url dinamico --}}
            </div>
        </div>
    </div>

    <x-blu-menu />

@endsection
