<?php

use GuzzleHttp\Psr7\Message;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadsController;

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
    if (empty($_SESSION['email'])){
        // return view('bootstrap.offline.login');
        return view('impact.index');
    }
    return redirect()->to('on');
    })->name('index');
Route::get('painel', function(){
    return view('bootstrap.offline.login');
});

Route::post('auth', [App\Http\Controllers\AuthController::class, 'authlogin']);

//# dashboard inicial
Route::get('on', [App\Http\Controllers\OnlineController::class, 'index'])
    ->middleware('online')->name('on');

//# Rotas relacionado ações com Clientes
Route::middleware('online')->prefix('clientes/')->group(function(){

    Route::get('/', [App\Http\Controllers\ClientesController::class, 'index'])->name('clientes');
    Route::get('addform',[App\Http\Controllers\ClientesController::class, 'createForm']);
    Route::post('add',[App\Http\Controllers\ClientesController::class, 'create']);
    Route::get('edit/{id}', function($id){
        $request = new App\Http\Controllers\ClientesController;
        return $request->edit($id);
    });
    Route::get('del/{id}', [App\Http\Controllers\ClientesController::class, 'destroy']);
    Route::get('view/{id}', function($id){
        return $id;
    });
    Route::post('update/{id}', [App\Http\Controllers\ClientesController::class, 'update']);

});

// rota somente para realização de testes de execução de funções
Route::get('teste', [App\Http\Controllers\Testecontroller::class, 'teste']);

Route::get('logout', function(){
    if (isset($_SESSION['email'])){
        session_destroy();
        return redirect()->to('/');
        }  else{
            return redirect()->to('/');
            }
});

Route::post('/forms/contact', [LeadsController::class, 'store']);
