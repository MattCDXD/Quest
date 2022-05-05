<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\QuestionController;
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
    return view('welcome')->with('questionnaires', 'question_id');
});

Route::get('/questionnaire', [QuestionnaireController::class, 'index']);

Route::get('/create', 'HomeController@create')->name('create');

Route::get('/questionnaires/create', 'QuestionnaireController@create');

Route::post('/questionnaires', 'QuestionnaireController@store');

Route::get('/home', 'HomeController@home')->name('home');

Route::resource('/questionnaire/create', 'QuestionController@index');

Route::get('/create', 'QuestionController@index');

Route::get('/aboutus', 'AboutusController@index');

Route::get('/create', 'QuestionnaireController@questionnaire');

Route::view('form', '/questionnaire/create');

Route::post('/create', 'QuestionController@store');