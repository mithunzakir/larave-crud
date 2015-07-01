<?php

Route::get('/', function () {
    return view('welcome');
});



Route::any('student', 'StudentController@std_directory');

Route::any('login', 'StudentController@login');

Route::any('register', 'StudentController@register');

Route::post('do_register', 'StudentController@do_register');

Route::any('all_users', 'StudentController@all_users');

Route::any('professors', 'StudentController@professors');

Route::any('delete/{user_id}', 'StudentController@delete');
