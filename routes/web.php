<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'websitelayout/home');
Route::view('about-ingrid', 'websitelayout/about-ingrid');
Route::view('paintings', 'websitelayout/paintings');
Route::view('contact', 'websitelayout/contact');
Route::view('exposities', 'websitelayout/exposities');



// Paintings routes
$paintings = [
    'channel',
    'nathalie',
    'laila',
    'erena',
    'malu',
    'yasmine',
    'valerie',
    'victor',
    'lois',
    'sadé',
    'hélène',
    'tom',
    'zara',
    'kane',
    'lanah',
    'suzan',
    'abby',
    'naomi',
    'merel',
    'lena',
    'jannes',
    'esila',
    'asha',
    'farah',
    'lorena',
    'heather',
];

foreach ($paintings as $painting) {
    Route::view("paintings/$painting", "paintings/$painting");
}
