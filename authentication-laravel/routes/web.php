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

// Include packages
use Dexperts\Authentication\Auth;

// Root uri
Route::get('/', function () {
    return view('welcome', [
        'name' => 'Laravel'
    ]);
});

// Example: url/auth/Stef
Route::get('/auth/{name}', function($sName) {
    $oAuth = new Auth();
    return view('welcome', [
        'name' => $oAuth->call($sName)
    ]);
});
