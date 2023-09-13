<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';





Route::prefix('admin')->group(function () {
    Route::get('/dashboard',[AdminController::class, 'adminDashboard']);

    //Category Routes
    Route::get('/categories',[CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create',[CategoryController::class, 'categoryCreate'])->name('category.create');
    Route::post('/category/store',[CategoryController::class, 'categoryStore'])->name('category.store');
    Route::get('/category/edit/{id}',[CategoryController::class, 'categoryEdit'])->name('category.edit');
    Route::post('/category/update/{id}',[CategoryController::class, 'categoryUpdate'])->name('category.update');
    Route::get('/category/destroy/{id}',[CategoryController::class, 'categoryDestroy']);


    //Products Route
    Route::get('/products',[ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create',[ProductController::class, 'productCreate'])->name('product.create');
    Route::post('/product/store',[ProductController::class, 'productStore'])->name('product.store');
    Route::get('/product/edit/{id}',[ProductController::class, 'productEdit'])->name('product.edit');
    Route::post('/product/update/{id}',[ProductController::class, 'productUpdate'])->name('product.update');
    Route::get('/product/destroy/{id}',[ProductController::class, 'productDestroy']);
   
    
});



//Frontend Route
Route::get('/checkout/{id}', [HomeController::class, 'checkOutPage']);

Route::get('/redirect', [HomeController::class, 'redirect']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/product/{slug}', [HomeController::class,'viewProduct'])->name('product.details');

Route::post('/checkout', [HomeController::class, 'orderStore']);
Route::get('/view_order', [HomeController::class, 'orderView']);
Route::get('/active_order/{id}', [HomeController::class, 'orderActive']);

Route::get('/get-product-price/{id}', [HomeController::class, 'getProductPrice']);



