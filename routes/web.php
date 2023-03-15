<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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
//ERRO TA BEM AQUI
//index mostra todos os dados do banco
Route::get('/', [EventController::class,'index']);
/*create formulario para colocar os dados*/
Route::get('/events/create',[EventController::class,'create']);
/*show ve um dado especifico do banco*/
Route::get('/events/{id}',[EventController::class,'show']);
//store passa os dados para o banco de dados
Route::post('/events',[EventController::class,'store']);
Route::get('/contact',function(){
    return view('contact');
});

