<?php
Route::get('/', 'ContactController@index');
Route::resource('contacts', 'ContactController');
Auth::routes();
