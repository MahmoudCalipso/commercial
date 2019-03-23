<?php

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
    return view('index');
});


//Auth::routes(['verify' => true]);

//Route::group([ 'middleware'=>'auth'], function () {


//client route
Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/client/edit/{id}', 'ClientController@edit')->name('client.edit');
Route::post('/client/update/{id}', 'ClientController@update')->name('client.update');
Route::get('/client/create', 'ClientController@create')->name('client.create');
Route::post('/client/store', 'ClientController@store')->name('client.store');
Route::get('/client/delete/{id}', 'ClientController@destroy')->name('client.delete');

//fournisseur route
Route::get('/fournisseurs', 'FournisseurController@index')->name('fournisseurs');
Route::get('/fournisseur/edit/{id}', 'FournisseurController@edit')->name('fournisseur.edit');
Route::post('/fournisseur/update/{id}', 'FournisseurController@update')->name('fournisseur.update');
Route::get('/fournisseur/create', 'FournisseurController@create')->name('fournisseur.create');
Route::post('/fournisseur/store', 'FournisseurController@store')->name('fournisseur.store');
Route::get('/fournisseur/delete/{id}','FournisseurController@destroy')->name('fournisseur.delete');

//Article route
Route::get('/articles', 'ArticleController@index')->name('articles');
Route::get('/article/edit/{id}', 'ArticleController@edit')->name('article.edit');
Route::post('/article/update/{id}', 'ArticleController@update')->name('article.update');
Route::get('/article/create', 'ArticleController@create')->name('article.create');
Route::post('/article/store', 'ArticleController@store')->name('article.store');
Route::get('/article/delete/{id}','ArticleController@destroy')->name('article.delete');

//Famille Article
Route::get('/fm_articles', 'FamilleArticlesController@index')->name('fm_articles');
Route::get('/fm_article/edit/{id}', 'FamilleArticlesController@edit')->name('fm_art.edit');
Route::post('/fm_article/update/{id}', 'FamilleArticlesController@update')->name('fm_art.update');
Route::get('/fm_article/create', 'FamilleArticlesController@create')->name('fm_art.create');
Route::post('/fm_article/store', 'FamilleArticlesController@store')->name('fm_art.store');
Route::get('/fm_article/delete/{id}','FamilleArticlesController@destroy')->name('fm_art.delete');

//TVA Article
Route::get('/tva', 'TvaController@index')->name('tva.index');
Route::get('/tva/edit/{id}', 'TvaController@edit')->name('tva.edit');
Route::post('/tva/update/{id}', 'TvaController@update')->name('tva.update');
Route::get('/tva/create', 'TvaController@create')->name('tva.create');
Route::post('/tva/store', 'TvaController@store')->name('tva.store');
Route::get('/tva/delete/{id}','TvaController@destroy')->name('tva.delete');
//Type_ArT
Route::get('/type_arts', 'TypeArticleController@index')->name('type_art.index');
Route::get('/type_art/edit/{id}', 'TypeArticleController@edit')->name('type_art.edit');
Route::post('/type_art/update/{id}', 'TypeArticleController@update')->name('type_art.update');
Route::get('/type_art/create', 'TypeArticleController@create')->name('type_art.create');
Route::post('/type_art/store', 'TypeArticleController@store')->name('type_art.store');
Route::get('/type_art/delete/{id}','TypeArticleController@destroy')->name('type_art.delete');
//Marque Controller
Route::get('/marques', 'MarquesController@index')->name('marques');
Route::get('/marque/edit/{id}', 'MarquesController@edit')->name('marque.edit');
Route::post('/marque/update/{id}', 'MarquesController@update')->name('marque.update');
Route::get('/marque/create', 'MarquesController@create')->name('marque.create');
Route::post('/marque/store', 'MarquesController@store')->name('marque.store');
Route::get('/marque/delete/{id}','MarquesController@destroy')->name('marque.delete');

//Document route
Route::get('/documents', 'DocumentController@index')->name('documents');
Route::get('/document/edit/{id}', 'DocumentController@edit')->name('document.edit');
Route::post('/document/update/{id}', 'DocumentController@update')->name('document.update');
Route::get('/document/create', 'DocumentController@create')->name('document.create');
Route::post('/document/store', 'DocumentController@store')->name('document.store');
Route::get('/document/delete/{id}','DocumentController@destroy')->name('document.delete');



//});









