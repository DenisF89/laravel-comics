<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('home');
})->name('home');


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
    $slug = Str::lower($item);
    Route::get('/' . $slug, function () use ($item) {
        return view('home');
    })->name((string) $slug);
}