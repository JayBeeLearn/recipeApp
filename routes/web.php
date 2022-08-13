<?php

use App\Http\Controllers\FoodTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\SignOutController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//Below are user-related routes 
Route::get('/register', [RegisterController::class, 'index'])->name('user');
Route::post('/register', [RegisterController::class, 'register'])->name('userregister');

Route::get('user/login', [SignInController::class, 'index'])->name('login');
Route::post('user/login', [SignInController::class, 'login'])->name('userlogin');

Route::post('user', [SignOutController::class, 'index'])->name('logout');

// Below are the recipes routes 
Route::get('/', [RecipeController::class, 'home'])->name('home');
Route::get('/recipe', [ RecipeController::class, 'index'])->name('recipe');
Route::get('/recipe/create', [RecipeController::class, 'create'])->name('recipecreate')->middleware('auth');
Route::post('/store', [RecipeController::class, 'store'])->name('recipestore');
Route::get('/recipe/list', [RecipeController::class, 'list'])->name('recipelist');
Route::get('/recipe/show/{recipes}', [RecipeController::class, 'show'])->name('recipeshow');
Route::get('/recipe/edit/{recipes}', [RecipeController::class, 'edit'])->name('recipeedit');
Route::put('recipe/{recipes}', [RecipeController::class, 'update'])->name('recipeupdate');
Route::delete('/recipe/{recipes}', [RecipeController::class, 'destroy'])->name('recipedelete');


//Types of Food Types Recipes are found below 
Route::get('recipe/latest', [FoodTypeController::class, 'latest'])->name('latest');
Route::get('recipe/continental', [FoodTypeController::class, 'continental'])->name('continental');
Route::get('recipe/african', [FoodTypeController::class, 'african'])->name('african');
Route::get('recipe/european', [FoodTypeController::class, 'european'])->name('european');
Route::get('recipe/american', [FoodTypeController::class, 'american'])->name('american');
Route::get('recipe/nigerian', [FoodTypeController::class, 'nigerian'])->name('nigerian');
Route::get('recipe/others', [FoodTypeController::class, 'others'])->name('others');