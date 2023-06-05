<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\Code\Test;

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
    return view('welcome');
});


//Eoute get  + closure
Route::get('test', function (){
    $a ='Nguyen Van A';
    return "<h1>Hello : $a</h1>";
});

Route::get('user/index', function (){
    return "<h1>List User</h1>";
}); 

// Router + Controller + Action 
Route::get('test/index' , [TestController::class ,'index']);
Route::get('test/detail' , [TestController::class ,'detail']); 

//muon no tu dong thi phai cho vao {{}}
Route::get('user/detail/{id?}/{test}' , [TestController::class,'show']); 

// Router  return view 
Route::get('/', function(){
    return view('welcome');
});

Route::get('list_user' , function(){
    return view('user.list_user');
});