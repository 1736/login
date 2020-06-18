<?php

use Illuminate\Support\Facades\Route;

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
// login
Route::get('/', function () {
    return view('login');
});
Route::get('registered',function(){
    return view('registered');
});
Route::get('find_pw',function(){
    return view('find_pw');
});
Route::post('reg_admin','AdminController@add');
Route::post('index','AdminController@login');
Route::get('logout','AdminController@logout');
// board 留言板
Route::middleware(['Check_login'])->group(function(){
    Route::get('blocks',function(){
        return view('blocks');
    });
    Route::get('cards',function(){
        return view('cards');
    });
    Route::get('carousels',function(){
        return view('carousels');
    });
    Route::get('forms',function(){
        return view('forms');
    });
    Route::get('people',function(){
        return view('people');
    });
    Route::get('pricing',function(){
        return view('pricing');
    });
    
    Route::get('board','BoardController@show');
    Route::get('board_add', function () {
        return view('back.board.board_add');
    });
    Route::post('board_add','BoardController@add');
    Route::get('board_R/{id}','BoardController@showone');
    Route::get('board_R',function(){
        return view('board_R');
    });
    Route::post('board_R_Add','BoardController@add');
    Route::post('board_edit','BoardController@edit');
    Route::get('board_delete/{id}/{board}','BoardController@delete');
    //admin 會員管理
    Route::get('admin','AdminController@show');
    Route::get('admin_add', function () {
        return view('back.admin.admin_add');
    });
    Route::any('admin_Add','AdminController@add');
    Route::get('admin_edit/{id}','AdminController@showone');
    Route::post('admin_edit','AdminController@edit');
    Route::get('admin_delete/{id}','AdminController@delete');
    Route::get('admin_sh/{id}','AdminController@sh');
    //banner&text 廣告區管理
    Route::get('banner','BannerController@show');
    Route::post('excel','ParantnameController@import');
    Route::get('excel_export','ParantnameController@export');

});