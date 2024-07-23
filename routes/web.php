<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('this is product page');
});


Route::get('/product', function () {
    //return view('this is product page');//
    return view('product', ['name' => 'Dan Cendric'], ['namee' => 'Julian Marcos']);
});
Route::get('/about', function () {
    //return view('this is product page');//
    return view('about');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});


Route::get('name/{name}', function ($name) {
    return ('My Name is '. $name);
}); 