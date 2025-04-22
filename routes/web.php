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
    Route::get('/index', 'index')->name('index');
    Route::get('/form_one', 'form_one')->name('form_one');
    Route::get('/form_two', 'form_two')->name('form_two');
    Route::post('/form_one', 'postcontact')->name('postcontact');
    Route::get('/view_contact', 'view_contact')->name('view_contact');
    Route::get('/ok', 'ok')->name('ok');
});
