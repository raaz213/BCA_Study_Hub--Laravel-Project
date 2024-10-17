<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SyllabusController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/userinfo', [UserController::class, 'userInfo']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
   
//For syllabus
Route::get('/syllabus',[SyllabusController::class,'index']);

Route::get('/syllabus/{categoryId}/subcategories',[SyllabusController::class,'subcategory']);

Route::get('/syllabus/{subcategoryId}/syllabus',[SyllabusController::class,'syllabus']);

//For Notes
Route::get('/notes',[ProductController::class,'index']);

Route::get('/notes/{categoryId}/subcategories',[ProductController::class,'subcategory']);

Route::get('/notes/{subcategoryId}/chapters',[ProductController::class,'chapters']);

Route::get('/notes/{chaptersId}/notes',[ProductController::class,'products']);

//For Past Questions
Route::get('/questions',[QuestionController::class,'index']);

Route::get('/questions/{categoryId}/subcategories',[QuestionController::class,'subcategory']);

Route::get('/questions/{subcategoryId}/years',[QuestionController::class,'years']);

Route::get('/questions/{chaptersId}/questions',[QuestionController::class,'questions']);

//For search
Route::get('/search',[UserController::class,'search']);

});
