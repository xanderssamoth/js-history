<?php
/**
 * @author Xanders
 * @see https://team.xsamtech.com/xanderssamoth
 */

use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/{entity}', [HomeController::class, 'exercise'])->name('exercise');
