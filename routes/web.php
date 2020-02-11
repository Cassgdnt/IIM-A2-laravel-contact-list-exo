<?php

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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/contacts', 'ContactController');

Route::post('/contact', function(){
    $contact = new App\Contact;

    $contact->name = request('name');
    $contact->titre =request('email');
    $contact->text =request('tel');

    $contact->save();

     return 'contact envoyé';
});