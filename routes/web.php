<?php

use Illuminate\Support\Facades\Route;

Route::get('/','SiteController@ShowHome');
Route::get('/buy','SiteController@ShowBuy');
Route::get('/rent','SiteController@ShowRent');
Route::get('/signin','SiteController@ShowSignIn');
Route::get('/createpost','SiteController@ShowCreatePost');

Route::get('/insert',function(){

    return view('insert');
});

Route::post('/insertData','CrudController@OnInsert');


