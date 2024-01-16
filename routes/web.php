<?php

use App\Http\Controllers\AddNewEmployeeController;
use App\Exceptions\InvalidOrderException;
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

Route::get(
	'/',
	function () {
		return view( 'layouts.app' );
	}
);

// Store new employee record.
Route::post(
	'/add-new-employee',
	array( AddNewEmployeeController::class, 'store' )
)->name( 'addNewEmployee.store' );
