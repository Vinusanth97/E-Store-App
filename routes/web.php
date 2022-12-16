<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\loginController;
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
    return view('index');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('login');
});
Route::get('/success',function()
{
    return view('success');
});
/*


Route::get('/hello',[IndexController::class,'sayhello']);
//Route::get('/login',[IndexController::class,'loginPage']);
Route::get('/login',[loginController::class,'loginPage']);
Route::post('/login',[loginController::class,'checkLogin']);
Route::get('/logout',[loginController::class,'logout']);

//This for E-Store-App
Route::get('/',function(){
return view('index');
});

Route::view('customerRegistation','register');
Route::post('/login',[loginController::class,'checklogin']);
Route::post('/reg',[UserController::class,'store']);
Route::resources(['product'=>ProductController::class,
'user'=>UserController::class,
'orders'=>OrderController::class
]);

Rout::get('/logout',[LoginController::class,'logout']);
Route::get('/placeorder/{product}',[ProductController::class,'ShowToOrder']);
//Not finished--*/