<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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


// アドレス一覧を表示する
Route::get('/address/index', [FormController::class, 'index'])->name('address.index');
//アドレス登録編集画面を表示
Route::get('/', [FormController::class, 'post'])->name('address.post');
// 投稿をコントローラーに送信
Route::post('/address/add', [FormController::class, 'add'])->name('address.newpost');
// 各編集画面を表示する
Route::get('/edit/{id}', [FormController::class, 'edit'])->name('address.edit');
//データを更新する
Route::post('/updata/{id}', [FormController::class, 'updata'])->name('address.updata');
//タスクを削除する
Route::post('/delete/{id}', [FormController::class, 'delete'])->name('address.delete');
