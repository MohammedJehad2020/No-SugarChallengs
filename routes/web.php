<?php

use App\Http\Middleware\CheckUserType;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProgramsController;
use App\Http\Controllers\ProgramsController as HomeProgramsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('programs/{id}', [HomeProgramsController::class, 'show'])->name('programs.show');
Route::get('cart', [CartController::class, 'index'])->name('cart');
Route::post('cart', [CartController::class, 'store']);

Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('checkout', [CheckoutController::class, 'store']);



Route::namespace('Admin')
   ->prefix('admin')
   ->as('admin.')
   ->middleware('auth', 'user.type:super-admin,doctor')
   ->group(function(){

     Route::get('programs/test', 'ProgramsController@test')->name('test');
     Route::get('programs/trash', 'ProgramsController@trash')->name('programs.trash');
     Route::put('programs/trash/{id}', [ProgramsController::class , 'restore'])->name('programs.restore');
     Route::delete('programs/trash/{id}', [ProgramsController::class , 'forceDelete'])->name('programs.force-delete');

     Route::resource('programs', 'ProgramsController');

     Route::resource('patients', 'PatientsController');

     Route::resource('roles', 'RolesController');

  
     Route::get('determineUserRole', 'DetermineUserRole@determineUserRole')->name('determineUserRole');

     Route::post('storeUserRole', 'DetermineUserRole@storeUserRole')->name('storeUserRole');

   });

