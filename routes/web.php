<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// Admin page
Route::get('/admin', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{game}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{game}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{game}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{game}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::resource('products', ProductController::class);