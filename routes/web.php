<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/pizzas', 'PizzaController@index')->name('allpizzas')->middleware('auth');
Route::get('/pizzas/create', 'PizzaController@create')->name('createpizza');
Route::post('/storepizza', 'PizzaController@store')->middleware('auth');
Route::get('/pizzas/{id}', 'PizzaController@show')->name('specificpizzas')->middleware('auth');
Route::get('/pizzas/{id}/complete', 'PizzaController@destroy')->middleware('auth');
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
