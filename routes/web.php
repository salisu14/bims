<?php

use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', \App\Http\Controllers\DashboardController::class)->name('dashboard');

    Route::resource('categories', \App\Http\Controllers\CategoryController::class);
    
    Route::resource('cities', \App\Http\Controllers\CityController::class);
    
    Route::resource('customers', \App\Http\Controllers\CustomerController::class);
    
    Route::resource('items', \App\Http\Controllers\ItemController::class);
    
    Route::resource('roles', \App\Http\Controllers\RoleController::class);
    
    Route::resource('sales', \App\Http\Controllers\SaleController::class);
    
    Route::resource('states', \App\Http\Controllers\StateController::class);
    
    Route::resource('stores', \App\Http\Controllers\StoreController::class);
    
    Route::resource('suppliers', \App\Http\Controllers\SupplierController::class);
    
    Route::resource('users', \App\Http\Controllers\UserController::class);

    Route::get('permissions', [\App\Http\Controllers\PermissionController::class, 'index'])->name('permissions.index');
    
    Route::resource('productions', \App\Http\Controllers\ProductionController::class);

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update'); 
});
