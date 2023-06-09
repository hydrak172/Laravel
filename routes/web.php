<?php

use App\Http\Controllers\Admin\ProductCategoryController as AdminProductCategoryController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
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
//Router dynamic paramter
Route::get('user/detail/{id?}/{test}' , [TestController::class,'show']); 

// Router  return view 
Route::get('/', function(){
    return view('welcome');
});

Route::get('list_user' , function(){
    return view('user.list_user');
});

Route::get('list_category' , [ProductCategoryController::class, 'index']);
Route::get('admin/list_category' , [AdminProductCategoryController::class, 'index']);

Route::get('list_user_blade' ,[ProductController::class,'index']); 
Route::get('home' , function(){
    return view('client.pages.home');
});
Route::get('blog_details' , function(){
    return view('client.pages.blog-details');
});
Route::get('blog' , function(){
    return view('client.pages.blog');
});
Route::get('check_out' , function(){
    return view('client.pages.check-out');
});
Route::get('contact' , function(){
    return view('client.pages.contact');
});
Route::get('product_detail' , function(){
    return view('client.pages.product-detail');
});
Route::get('product_list' , function(){
    return view('client.pages.product-list');
});

Route::get('shopping_cart' , function(){
    return view('client.pages.shopping-cart');
});

Route::get('master' , function(){
    return view('admin.layout.master');
});

Route::get('admin' , function(){
    return view('admin.pages.dashboard');
});
Route::get('admin/user' , function(){
    return view('admin.pages.user');
});
Route::get('admin/blog' , function(){
    return view('admin.pages.blog');
});
//kien thuc cu phap name 
Route::get('admin/product' , function(){
    return view('admin.pages.blog');
})->name('admin.product');

