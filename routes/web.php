<?php

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
    $page_title = 'Home Page';
    return view('home', compact('page_title'));
})->name('home');

Route::get('/page_one', function () {
    $page_title = 'First Page';
    $page_text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus eveniet esse quo similique temporibus
    placeat earum. Ducimus, nulla! Et, aut enim architecto alias illum qui tempore nulla earum obcaecati
    ratione.Saepe libero, quia qui molestias inventore iusto facere impedit at modi eveniet quas exercitationem
    obcaecati necessitatibus provident, eligendi et soluta. Vero, cumque voluptate excepturi odio impedit
    doloribus amet fugiat repellat.';
    return view('/pages/first_page', compact('page_title', 'page_text'));
})->name('first_page');

Route::get('/page_two', function () {
    $page_title = 'Second Page';
    $page_text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus eveniet esse quo similique temporibus
    placeat earum. Ducimus, nulla! Et, aut enim architecto alias illum qui tempore nulla earum obcaecati
    ratione.Saepe libero, quia qui molestias inventore iusto facere impedit at modi eveniet quas exercitationem
    obcaecati necessitatibus provident, eligendi et soluta. Vero, cumque voluptate excepturi odio impedit
    doloribus amet fugiat repellat.';
    return view('/pages/second_page', compact('page_title', 'page_text'));
})->name('second_page');

Route::get('/page_three', function () {
    $page_title = 'Third Page';
    $page_text = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus eveniet esse quo similique temporibus
    placeat earum. Ducimus, nulla! Et, aut enim architecto alias illum qui tempore nulla earum obcaecati
    ratione.Saepe libero, quia qui molestias inventore iusto facere impedit at modi eveniet quas exercitationem
    obcaecati necessitatibus provident, eligendi et soluta. Vero, cumque voluptate excepturi odio impedit
    doloribus amet fugiat repellat.';
    return view('/pages/third_page', compact('page_title', 'page_text'));
})->name('third_page');
