<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;

use App\Mail\ContactMessageCreated;

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

Route::get('/',[PagesController::class,'home'])->name('home');

// Route::get('/test-email',function(){
//   return new ContactMessageCreated('Issame Tariq','tariqissame10@gmail.com',"Hallo wie geht's dir");
// });

Route::get('/about',[PagesController::class,'about'])->name('about');

Route::resource('contacts',ContactController::class);
