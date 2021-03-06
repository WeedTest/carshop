<?php

use Illuminate\Support\Facades\Route;
use App\Http\Actions\ListingCarsAction;
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

Route::redirect('/', '/cars');
Route::get('/cars', ListingCarsAction::class);
Route::get('/test', function(){
    dd(\App\Models\Car::paginate());
    dd((new ReflectionClass(\Illuminate\Database\Eloquent\Builder::class))->getMethod('paginate'));
});
