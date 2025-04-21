<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormOne\FormOneController;
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

// Route::get('/form_one', function () {
//     return view('form_one');
// });

Route::prefix('Forms')->name('Forms.')->controller(FormOneController::class)->group(function () {
    Route::get('/form_one', 'form_one')->name('form_one');
    Route::post('/form_one', 'postcontact')->name('postcontact');
    Route::get('/ok', 'ok')->name('ok');
});
