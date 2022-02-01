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
    return "Hello world";
});

// Route::get('/chi-siamo', function () {
//     return "<h1>Pagina Chi Siamo</h1>";
// });

// Route::get('/contatti', function () {
//     return "<h1>Pagina Contatti</h1>";
// });

// Route::get('/blog/articolo-1', function () {
//     return "<h1>Pagina Articolo 1</h1>";
// });