<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {       // Route per la home page, 
    return view('home');            // restituisce la vista home.blade.php
})->name('home');                   // nome della route, utile per generare url in modo dinamico



// Route per le pagine del menu, con ciclo per generare le route in modo dinamico
 $menu = [   
                "CHARACTERS", 
                "COMICS", 
                "MOVIES", 
                "TV", 
                "GAMES", 
                "COLLECTIBLES", 
                "VIDEOS", 
                "FUNS", 
                "NEWS", 
                "SHOP"
            ];

foreach ($menu as $item) {
    $slug = Str::lower($item);              // Str è una classe di Laravel che contiene metodi per manipolare le stringhe, in questo caso strtolower() per trasformare la stringa in minuscolo
    Route::get('/' . $slug, function () { 
        return view('home');                // restituisce sempre home.blade.php, ma $slug potrebbe restituire pagine con i nomi dei link
    })->name((string) $slug);               // (string) è un cast per convertire variabile in stringa (in questo caso $slug lo è già, ma è buona pratica per evitare errori)
}



// Route per il dettaglio del singolo comic
Route::get('/comic/{id}', function ($id) {  // {id} è un parametro dinamico che viene passato alla funzione, in questo caso l'id del comic
    $cards = config('comics');
    if (!isset($cards[$id])) {              // se l'id non esiste nell'array dei comics, restituisce un errore 404
        abort(404);
    }
    $comic = $cards[$id];
    return view('comic', compact('comic')); // restituisce la vista comic.blade.php, passando i dati del comic
})->name('comic');