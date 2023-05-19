<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoleController;

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

Route::get('/', [PageController::class, 'index']);

Route::get('/role/ajouter', [RoleController::class, 'form_ajouter'])->name('ajouter_role');
Route::post('/role/ajouter/post', [RoleController::class, 'form_ajouter_post'])->name('ajouter_role_post');
Route::get('/role/list', [RoleController::class, 'form_list_role'])->name('list_role');


Route::get('/role/modifier/{id}', [RoleController::class, 'form_modifier'])->name('modifier_role');
Route::post('/role/modifier/post', [RoleController::class, 'form_modifier_post'])->name('modifier_role_post');

Route::get('/role/supprimer/{id}', [RoleController::class, 'form_supprimer']);