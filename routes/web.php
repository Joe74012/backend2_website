<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/producten', function () {
    return view('producten',
        ['producten' => ['Laptop', 'Muis', 'Toetsenbord']
        ]);
});

Route::view('/dashboard', 'dashboard', [
    'isAdmin' => true
]);

Route::prefix("game")->group(function () {
    Route::get('/keuze', function () {
        return "keuze is gemaakt";
    });

    Route::get("/game/{game_id}", function ($game_id) {
        return "Game $game_id is begonnen";
    });
    Route::get('/ronde/{round_id}', function ($round_id) {
        return "Ronde $round_id is gestart";
    });

    Route::get('/winnaar', function () {
        return view(("game.resultaat"));
    });

    Route::get('/verloren', function () {
        return "Speler heeft verloren";
    });
});


route::fallback(function () {
    return "pagina bestaat niet";
});
