<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;
use Illuminate\Support\Facades\Route;
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

Route::get('/register', [AuthController::class,'register']);

Route::post('/register', [AuthController::class,'registerpost']);

Route::get('/login', [AuthController::class,'login'])->name('login');

Route::post('/login', [AuthController::class,'loginpost']);


Route::get('/', [SiteController::class,'home']);

Route::get('/products/{cat_id}', [SiteController::class,'products']);

Route::get('/product/{id}',[SiteController::class,'product']);
Route::middleware('auth')->group(function(){
    Route::get('/logout', [AuthController::class,'logout']);
    
    Route::get('/dashboard', [DashController::class,'edit']);

    Route::post('/dashboard', [DashController::class,'editpost']);
    Route::prefix('/admin')->group(
        function(){

            Route::get('/', [AdminController::class,'home']);

            Route::prefix('/users')->group(
                
                function(){
                    Route::get('/', [UsersController::class,'home']);

                    Route::get('/delete/{id}', [UsersController::class,'delete']);

                    Route::get('/insert', [UsersController::class,'insert']);

                    Route::post('/insert', [UsersController::class,'insert_task']);
                    
                    Route::get('/{id}', [UsersController::class,'user']);

                    Route::post('/{id}', [UsersController::class,'user_task']);
                    
                });
            Route::prefix('/products')->group(
                function(){
                    Route::get('/', [ProductsController::class,'home']);
                    
                    Route::get('/delete/{id}', [ProductsController::class,'delete']);

                    Route::get('/insert', [ProductsController::class,'insert']);

                    Route::post('/insert', [ProductsController::class,'insert_task']);

                    Route::get('/{id}', [ProductsController::class,'product']);

                    Route::post('/{id}', [ProductsController::class,'product_task']);
                });
            Route::prefix('/categories')->group(
                function(){
                    Route::get('/', [CategoriesController::class,'home']);

                    Route::get('/delete/{id}', [CategoriesController::class,'delete']);

                    Route::get('/insert', [CategoriesController::class,'insert']);

                    Route::post('/insert', [CategoriesController::class,'insert_task']);

                    Route::get('/{id}', [CategoriesController::class,'category']);

                    Route::post('/{id}', [CategoriesController::class,'category_task']);
                    });
                });
})
;