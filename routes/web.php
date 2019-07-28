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

Route::get('/', function () {
    return view('welcome');
});


$examples = [
    'smooth-scroll',
     'context-menu',
     'conditional-visibility',
    'modal',
   'confirmation-button',
       'tabs',
];


collect($examples)->each(function ($uri) {
    Route::get($uri, function () use ($uri) {
        return view($uri);
    });
});


 Route::post('confirmation-button', function () {
     return 'Form submitted';
 });
