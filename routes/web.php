<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\DB;


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
// Route to display the form
Route::get('/form', function () {
    return view('form');
});

// Route to handle form submission
Route::post('/submit-form', [FormController::class, 'submit'])->name('submit-form');

// Route for success page
Route::get('/success', function () {
    return view('success');
})->name('success');


Route::get('/display-data', [FormController::class, 'displayData'])->name('display-data');




