<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;

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

Route::namespace('App\Http\Controllers\Site')->group(function(){
    
    Route::get('/', 'HomeController')->name('home');

    Route::get('produtos', 'CategoryController@index')->name('products');
    Route::get('produtos/{slug}', 'CategoryController@show')->name('productsShow'); //slug é a descrição da page no navegador, utilizado para SEO google

    Route::get('blog', 'BlogController')->name('blog');

    Route::view('sobre', view:'Site\about\index')->name('about'); //por ser uma página 100% estática, não é necessário Controller

    Route::get('contato', 'ContactController@index')->name('contact');
    Route::post('contato', 'ContactController@form')->name('contactForm');
    
});






//namespace = método estático
//O método "group" recebe uma função, que conterá as rotas do site
