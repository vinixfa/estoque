<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\SalaoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ServicoController;
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


//*-----------------------------INICIO DA ROTA PRODUTO--------------------------------------*//


//INDEX
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');

//CREATE
Route::get('produto/create', [ProdutoController::class, 'create'])->name('produto.create');

//STORE
Route::post('produto/create', [ProdutoController::class, 'store'])->name('produto.store');

//SHOW
Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');


//EDIT
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');


//UPDATE
Route::put('/produto/{id}', [ProdutoController::class, 'update'])->name('produto.update');


//DELETE
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto.delete');


//*-----------------------------FIM DA ROTA PRODUTO-----------------------------------------*//


//*-----------------------------INICIO DA ROTA CATEGORIA------------------------------------*//

//INDEX
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');

//CREATE
Route::get('categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');

//STORE
Route::post('categoria/create', [CategoriaController::class, 'store'])->name('categoria.store');

//SHOW
Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');

//EDIT
Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');

//UPTADE
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');

//DELETE
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.delete');


//*--------------------------------FIM DA ROTA CATEGORIA-------------------------------------------*//


//*--------------------------------INICIO DA ROTA USUARIO------------------------------------------*//

//INDEX
Route::get('/user', [UserController::class, 'index'])->name('user.index');//->middleware('can:is_admin'); 

//CREATE
Route::get('user/create', [UserController::class, 'create'])->name('user.create');

//STORE
Route::post('user/create', [UserController::class, 'store'])->name('user.store');

//SHOW 
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.show');

//EDIT
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');

//UPDATE
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');


//DELETE
Route::delete('/user/{id}', [UserController::class, 'destroy'])->name('user.delete');


//*--------------------------------FIM DA ROTA USUARIO-------------------------------------------*//


//*--------------------------------INICIO DA ROTA PROFISSIONAL-----------------------------------*//

//INDEX
Route::get('/profissional', [ProfissionalController::class, 'index'])->name('profissional.index');

//CREATE
Route::get('profissional/create', [ProfissionalController::class, 'create'])->name('profissional.create');

//STORE
Route::post('profissional/create', [ProfissionalController::class, 'store'])->name('profissional.store');

//SHOW
Route::get('/profissional/{id}', [ProfissionalController::class, 'show'])->name('profissional.show');

//EDITE
Route::get('/profissional/{id}/edit', [ProfissionalController::class, 'edit'])->name('profissional.edit');

//UPDATE
Route::put('/profissional/{id}', [ProfissionalController::class, 'update'])->name('profissional.update');

//DELETE
Route::delete('/profissional/{id}', [ProfissionalController::class, 'destroy'])->name('profissional.delete');


//*------------------------------FIM DA ROTA PROFISSIONAL-------------------------------------------*//


//*---------------------------------INICIO DA ROTA SALAO-------------------------------------------*//

//INDEX
Route::get('/salao', [SalaoController::class, 'index'])->name('salao.index');

//CREATE
Route::get('salao/create', [SalaoController::class, 'create'])->name('salao.create');

//STORE
Route::post('salao/create', [SalaoController::class, 'store'])->name('salao.store');

//SHOW
Route::get('/salao/{id}', [SalaoController::class, 'show'])->name('salao.show');

//EDIT
Route::get('/salao/{id}/edit', [SalaoController::class, 'edit'])->name('salao.edit');

//UPDATE
Route::put('/salao/{id}', [SalaoController::class, 'update'])->name('salao.update');

//DELETE
Route::delete('/salao/{id}', [SalaoController::class, 'destroy'])->name('salao.delete');


//*-------------------------------FIM DA ROTA SALAO-------------------------------------------*//

//*-------------------------------INICIO DA ROTA CLIENTE--------------------------------------*//

//INDEX
Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');

//CREATE
Route::get('cliente/create', [ClienteController::class, 'create'])->name('cliente.create');

//STORE
Route::post('cliente/create', [ClienteController::class, 'store'])->name('cliente.store');

//SHOW
Route::get('/cliente/{id}', [ClienteController::class, 'show'])->name('cliente.show');

//EDIT
Route::get('/cliente/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');

//UPDATE
Route::put('/cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');

//DELETE
Route::delete('/cliente/{id}', [ClienteController::class, 'destroy'])->name('cliente.delete');

//*----------------------------FIM DA ROTA CLIENTE----------------------------------------*//


//*----------------------------INICIO DA ROTA SERVICO-------------------------------------*//

//INDEX
Route::get('/servico', [ServicoController::class, 'index'])->name('servico.index');

//CREATE
Route::get('/servico/create', [ServicoController::class, 'create'])->name('servico.create');

//STORE
Route::post('/servico/create', [ServicoController::class, 'store'])->name('servico.store');

//SHOW
Route::get('/servico/{id}', [ServicoController::class, 'show'])->name('servico.show');

//EDIT
Route::get('/servico/{id}/edit', [ServicoController::class, 'edit'])->name('servico.edit');

//UPDATE
Route::put('/servico/{id}', [ServicoController::class, 'update'])->name('servico.update');

//DELETE
Route::delete('/servico/{id}', [ServicoController::class, 'destroy'])->name('servico.delete');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//*-------------------------FIM DA ROTA SERVICO------------------------------------------*//

