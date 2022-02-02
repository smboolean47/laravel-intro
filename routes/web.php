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
    return view("home");
});

Route::get('/chi-siamo', function () {
    $data = [
        [
            "nome" => "Samuele",
            "cognome" => "Madrigali"
        ],
        [
            "nome" => "Maurizio",
            "cognome" => "Paoletti"
        ],
        [
            "nome" => "Federico",
            "cognome" => "Travi"
        ]
    ];

    return view("chi-siamo", ["team" => $data]);
});

Route::get('/contatti', function () {
    $data = [
        [
            "indirizzo" => "Via pippo",
            "citta" => "La Spezia"
        ],
        [
            "indirizzo" => "Via pippo",
            "citta" => "Fuerteventura"
        ]
    ];

    return view("contatti", ["sedi" => $data]);
});

Route::get('/blog/articolo-1', function () {
    return "<h1>Pagina Articolo 1</h1>";
});