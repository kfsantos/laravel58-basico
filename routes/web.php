<?php


Route::resource('/painel/produtos', 'Painel\ProdutoController');

Route::group(['namespace' => 'Site'], function(){
    Route::get('/categorias/{id}', 'SiteController@categorias');
    Route::get('/', 'SiteController@index');
    Route::get('/contato', 'SiteController@contato');
});


