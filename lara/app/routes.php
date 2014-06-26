<?php

Route::get('/create/{username}', 'PagesController@create');
Route::get('/delete/{username}', 'PagesController@delete');
Route::get('/update/{username}/{new}', 'PagesController@update');
Route::get('/all', 'PagesController@all');



