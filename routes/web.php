<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryBuilderController;
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
    return view('welcome');
});

Route::get('/series', [SeriesController::class, 'index']);
    
Route::get('/', function () {
    return view('produto');
});

Route::get('produto/{id}/{nome}', function($id, $nome){
    return "produto {$id}, nome {$nome}";
});

Route::get('query-builder', [QueryBuilderController::class, 'tests']);
// Route::get('query-builder', 'QueryBuilderController@tests');

Route::get('users', function(){
  return DB::table('users')->get();
});