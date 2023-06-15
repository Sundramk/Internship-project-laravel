<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\frontend\HomeController;
use App\Http\controllers\frontend\AboutController;
use App\Http\controllers\frontend\BlogController;
use App\Http\controllers\frontend\ContactController;
use App\Http\controllers\frontend\PortfolioController;
use App\Http\controllers\frontend\ServicesController;


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
Route::get('/',[HomeController::class,'index']);

