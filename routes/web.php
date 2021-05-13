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
  $database = config('db_dischi');

  return view('home')->with('comics', $database);
});

Route::get('/single/{id}', function ($id) {
  $database = config('db_dischi');
  return view('single')->with('comic', $database[$id])->with('id', $id);
}) ->name('detail');
