<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\MaterilController;
use App\Http\Controllers\Admin\ProductController;

use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\User\UserAboutController;
use App\Http\Controllers\User\UserProductController;
use App\Http\Controllers\User\UserMaterialController;




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

Route::namespace('Admin')->group(function () {
            Route::group(['middleware' => ['auth']], function() {
        
            //home
            Route::get('/home/admin', [HomeController::class, 'index'])->name('home');
            Route::get('/home/create', [HomeController::class, 'creat'])->name('create_home');
            Route::POST('/home/store', [HomeController::class, 'store'])->name('store_home');
            Route::get('/home/delete/{id}', [HomeController::class, 'destroy'])->name('delete_section');
            Route::get('/home/edit/{id}', [HomeController::class, 'edit'])->name('edit_home');
            Route::POST('/section/update/home', [HomeController::class, 'update'])->name('update_section_home');
            //about
            Route::get('/about', [AboutController::class, 'index'])->name('about');
            Route::get('/about/create', [AboutController::class, 'creat'])->name('create_about');
            Route::POST('/about/store', [AboutController::class, 'store'])->name('store_about');
            Route::get('/about/delete/{id}', [AboutController::class, 'destroy'])->name('delete_about_section');
            Route::get('/about/edit/{id}', [AboutController::class, 'edit'])->name('edit_about');
            Route::POST('/section/update/about', [AboutController::class, 'update'])->name('update_section_about');
            // materila
            Route::get('/metrial', [MaterilController::class, 'index'])->name('material');
            Route::get('/metrial/create/{id}', [MaterilController::class, 'create'])->name('create_material');
            Route::get('/metrial/edit/{id}', [MaterilController::class, 'edit'])->name('edit_material');
            Route::POST('/metrial/store', [MaterilController::class, 'store'])->name('store_material');
            Route::POST('/metrial/update', [MaterilController::class, 'update'])->name('update_material');
            Route::get('/metrial/child/{id}', [MaterilController::class, 'child'])->name('child_material');
            Route::get('/metrial/delete/{id}', [MaterilController::class, 'destroy'])->name('delete_material');
            Route::get('/metrial/delete/child/{id}', [MaterilController::class, 'delete_child'])->name('delete_child');
            //product
             // materila
             Route::get('/product', [ProductController::class, 'index'])->name('product');
             Route::get('/product/create/{id}', [ProductController::class, 'create'])->name('create_product');
             Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('edit_product');
             Route::POST('/product/store', [ProductController::class, 'store'])->name('store_product');
             Route::POST('/product/update', [ProductController::class, 'update'])->name('update_product');
             Route::get('/product/child/{id}', [ProductController::class, 'child'])->name('child_product');
             Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('delete_product');
             Route::get('/product/delete/child/{id}', [ProductController::class, 'delete_child'])->name('delete_child_product');
             //user
             Route::get('/logout', [HomeController::class, 'perform'])->name('logout.perform');
        });
             Route::get('/product', [ProductController::class, 'index'])->name('product');
  });
Route::namespace('User')->group(function () {
    Route::get('/',  [UserHomeController::class, 'index'])->name('home_interface');
    Route::get('/conect_us',  [UserHomeController::class, 'conect'])->name('conect_us');
    Route::get('/about_interface',  [UserAboutController::class, 'index'])->name('about_interface');
    Route::get('/product_interface',  [UserProductController::class, 'index'])->name('product_interface');
    Route::get('/product/interface/child/{id}',  [UserProductController::class, 'getproduct'])->name('product_child');
    Route::get('/material_interface',  [UserMaterialController::class, 'index'])->name('material_interface');
    Route::get('/show_materila/img/{id}',  [UserMaterialController::class, 'show_img'])->name('show_img');
    Route::get('/material_interface/child/{id}',  [UserMaterialController::class, 'getmaterial'])->name('material_interface_child');
});

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
