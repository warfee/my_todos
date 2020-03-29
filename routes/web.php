<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/dashboard', 'TodosController@index');
Route::get('/todos', 'TodosController@show');
Route::get('/todos/create', 'TodosController@create');
Route::post('/todos/store', 'TodosController@store');
Route::get('/todos/{todo}/view', 'TodosController@view');
Route::get('/todos/{todo}/edit', 'TodosController@edit');
Route::put('/todos/{todo}', 'TodosController@update');
Route::get('/done_todos', 'TodosController@show_done');
