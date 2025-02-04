<?php

Route::group(['as' => "api.", 'prefix' => "api", 'namespace' => "Api", 'middleware' => ["api"]], function(){
    Route::get('/', ['as' => "index", 'uses' => "MainController@index"]);
});