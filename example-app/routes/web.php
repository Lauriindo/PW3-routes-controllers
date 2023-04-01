<?php

use App\Http\Controllers\Date;
use App\Http\Controllers\Name;
use App\Http\Controllers\Operations;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/name/{name}', [Name::class, 'name']);
Route::get('/sum/{value1}/{value2}', [Operations::class, 'sum']);
Route::get('/subtraction/{value1}/{value2}', [Operations::class, 'subtraction']);
Route::get('/division/{value1}/{value2}', [Operations::class, 'division']);
Route::get('/multiplication/{value1}/{value2}', [Operations::class, 'multiplication']);
Route::get('/all/{value1}/{value2}', [Operations::class, 'all']);
Route::get('/calculateYearSub/{day1}/{month1}/{year1}/{day2}/{month2}/{year2}', [Date::class, 'calculateYearSub']);
Route::get('/calculateYearSum/{day1}/{month1}/{year1}/{day2}/{month2}/{year2}', [Date::class, 'calculateYearSum']);