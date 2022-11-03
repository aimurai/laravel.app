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



Route::get('hello', 'App\Http\Controllers\HelloController@index'
);

Route::post('hello', 'App\http\Controllers\HelloController@post'
);

Route::get('hello/add', 'App\http\Controllers\HelloController@add'
);

Route::post('hello/add', 'App\http\Controllers\HelloController@create'
);

Route::get('hello/edit', 'App\http\Controllers\HelloController@edit'
);

Route::post('hello/edit', 'App\http\Controllers\HelloController@update'
);

Route::get('hello/del', 'App\http\Controllers\HelloController@del'
);

Route::post('hello/del', 'App\http\Controllers\HelloController@remove'
);

Route::get('hello/show', 'App\http\Controllers\HelloController@show'
);
