<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
//use Illuminate\Support\Facades\Route;



Route::resource('clients', ClientController::class);
Route::resource('users', 'UserController');
Route::resource('users', 'UserController');
Route::resource('users', 'UserController');
Route::resource('users', 'UserController');
Route::resource('users', 'UserController');




Route::get('categories', [CategorieController::class, 'index']);
Route::get('categories/{id}', [CategorieController::class, 'show']);

Route::get('produits', [ProduitController::class, 'index']);
Route::get('produits/{id}', [ProduitController::class, 'show']);



Route::get('/clients', 'ClientController@index');
Route::get('/clients/create', 'ClientController@create');
Route::post('/clients', 'ClientController@store');
Route::get('/clients/{id}/edit', 'ClientController@edit');
Route::put('/clients/{id}', 'ClientController@update');
Route::delete('/clients/{id}', 'ClientController@destroy');


Route::get('/products', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::post('/products', 'ProductController@store');
Route::get('/products/{id}/edit', 'ProductController@edit');
Route::put('/products/{id}', 'ProductController@update');
Route::delete('/products/{id}', 'ProductController@destroy');




Route::get('/categories', 'CategoryController@index');
Route::get('/categories/create', 'CategoryController@create');
Route::post('/categories', 'CategoryController@store');
Route::get('/categories/{id}/edit', 'CategoryController@edit');
Route::put('/categories/{id}', 'CategoryController@update');
Route::delete('/categories/{id}', 'CategoryController@destroy');

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

Route::get('/', function () {
    return view('index');
});
Route::get('/produit', function () {
    return view('produit');


});


