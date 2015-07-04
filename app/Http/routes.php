<?php

Route::get('/', function () {
    return view('welcome');
});
Route::resource('create_event','EventController');
