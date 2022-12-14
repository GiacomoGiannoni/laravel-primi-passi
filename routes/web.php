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
    $stampTitle = 'Ciao Mondo di Laravel! :D';
    return view('home', ['title' => $stampTitle]);
})->name('PaginaHome');

Route::get('/user', function () {

    $listUser = ['Giacomo', 'Antonio', 'Gianluca', 'Susino', 'Pietro', 'Franco', 'altri'];

    return view('user', ['listUser' => $listUser]);

})->name('PageUser');
