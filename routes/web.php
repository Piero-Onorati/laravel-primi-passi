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
    return view('home');
})-> name('homepage');

Route::get('/about', function () {
    $data = [ 'title' => 'This is an About Page!!!'];
    return view('about', $data);
})-> name('aboutpage');

Route::get('/contact', function () {
    $data = [ 
        'title' => 'This is the Contacts Page!!!',
        'contactList' => [ 'Pippo', 'Pluto', 'Paperino']
    ];
    return view('contacts', $data);
})-> name('contactspage');