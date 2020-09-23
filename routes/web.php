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
    return view('welcome');
});

//return value direct
Route::get('/returnvalue', function () {
    return('Hello there!');
});

//pass only json
Route::get('/passjson', function () {
    return ['name' => 'Adnan', 'age'=>30];
});

// pass Data
Route::get('/passdata', function () {
    $data = [
        'name' => 'Adnan',
        'age'=>32,
    ];
    return view('/tutorial/passData', $data);
});


// pass Data
Route::get('/ifstatment', function () {
    $data = [
        'name' => 'Adnan',
        'age'=>32,
    ];
    return view('/tutorial/ifstatment', $data);
});

// loop Data
Route::get('loop', function () {
    $pizzas = [
        ['type' => 'hawaiin','base'=>'cheesy crust'],
        ['type' => 'volcano','base'=>'garlic crust'],
        ['type' => 'veg supreme','base'=>'thin & crispy'],
    ];
    return view('/tutorial/loop', ['pizzas'=>$pizzas]);
});
// pass Data
Route::get('/queryparameters', function () {

    $name = request('name');
    return view('/tutorial/queryparameters',['name'=>$name]);
});
// Route Parameters
Route::get('/routeparameters/{id}', function ($id) {
    //use the $id variable to query the db for a record
    return view('/tutorial/routeparameters',['id'=>$id]);
});

//Project
Route::get('/pizzas','PizzaController@index')->name('pizza.index')->middleware('auth');
Route::get('/pizzas/create','PizzaController@create')->name('pizza.create');//create should be before /pizzas/{id} to take it before
Route::post('/pizzas','PizzaController@store')->name('pizza.store');
Route::get('/pizzas/{id}','PizzaController@show')->name('pizza.show')->middleware('auth');
Route::delete('/pizzas/{id}','PizzaController@destroy')->name('pizza.destroy')->middleware('auth');


Auth::routes([
    'register'=>false,
]);

Route::get('/home', 'HomeController@index')->name('home');
