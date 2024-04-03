<?php

use App\Events\NovaChamada;
use App\Http\Controllers\ChamadaController;
use App\Http\Controllers\clienteController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\userController;
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

Route::controller(loginController::class)->group(function(){
    Route::get('/', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
});

Route::get('/tela/adm', function(){
    return view('admin.admin');
})->name('admin');

Route::get('/acoesdb', function(){
    return view('admin.delDb');
})->name('db');

Route::get('/index/user', function(){
    return view('profissional.index');
})->name('profissional');

Route::controller(userController::class)->group(function(){
    Route::get('/users', 'index')->name('users.index');
    Route::get('/users/create', 'create')->name('users.create');
    Route::post('/users/created', 'store')->name('user.store');
    Route::put('/users/updated/{id}', 'update')->name('user.update');
    Route::delete('/users/deleted/{id}', 'destroy')->name('user.destroy');
});

Route::controller(clienteController::class)->group(function(){
    Route::get('/clientes/index', 'index')->name('cliente.index');
    Route::get('/clientes/index/prioridade', 'prioridade')->name('cliente.prioridade');
    Route::get('/clientes/create', 'create')->name('cliente.create');
    Route::post('clientes/created', 'store')->name('cliente.store');
    Route::put('clientes/encaminhar/{id}', 'encaminhar')->name('cliente.encaminhar');
    Route::get('clientes/finalizar/{id}', 'finalizar')->name('cliente.finalizar');
    Route::get('clientes/delAll', 'delAll')->name('cliente.delall');
});

Route::get('/tela', function(){
    return view('teste');
})->name('tela');

Route::get('broadcast', function(){
    broadcast(new NovaChamada());
    return redirect()->route('cliente.index')->with(['success' => 'Chamada Realizada']);
})->name('chamada');

Route::controller(ChamadaController::class)->group(function(){
    Route::get('/chamada', 'ultimaChamada')->name('ultima.chamada');
    Route::get('/chamada/ultimas', 'ultimasChamadas')->name('ultimas.chamadas');
    Route::get('chamada/{cliente_id}/chamar', 'chamar')->name('chamada.store');
    Route::get('chamada/delAll', 'delAll')->name('chamada.delAll');
});