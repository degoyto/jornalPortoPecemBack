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
Route::get('/teste', function () {
    return view('teste');
});
Route::get('/teste/{id}', function ($id) {
    return view('teste');
});
Route::view("/home", "teste", ["id"=>2]);

// Route::get('/teste/{id}', function ($id) {
//     return view('teste');
// })->name("teste");

Route::middleware([])->group(function(){
    Route::prefix('panel')->group(function(){
        Route::name("panel.")->group(function(){
            Route::get("/hello", function(){
                return "misericordia";
            })->name("hello");
            Route::get("/", function(){
                return redirect()->route("panel.hello");
            })->name("h");
        });
        
    });
});