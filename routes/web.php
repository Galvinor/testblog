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

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/about',function(){
    $contents=file_get_contents(resource_path().'/pages/about.html');
    return view('about',['contents'=>$contents]);
})->name('about');