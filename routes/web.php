<?php

use App\Http\Middleware\CheckUserType;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::namespace('Admin')
   ->prefix('admin')
   ->as('admin.')
   ->middleware('auth', 'user.type:super-admin,doctor')
   ->group(function(){

     Route::resource('programs', 'ProgramsController');

     Route::resource('patients', 'PatientsController');

     Route::resource('roles', 'RolesController');

  
     Route::get('determineUserRole', 'DetermineUserRole@determineUserRole')->name('determineUserRole');

     Route::post('storeUserRole', 'DetermineUserRole@storeUserRole')->name('storeUserRole');

   });
