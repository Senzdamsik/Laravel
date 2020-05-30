<?php

if(version_compare(PHP_VERSION, '7.2.0', '>=')) { error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); }


////////////////////////////////////////////////////////////////////////////


// YANG ATAS INI JANGAN DIRUBAH !!!
// YANG ATAS INI JANGAN DIRUBAH !!!
// YANG ATAS INI JANGAN DIRUBAH !!!


////////////////////////////////////////////////////////////////////////////





Route::get('/', [
    'uses' => 'BlogController@index',
    'as'   => 'blog'
]);

Route::get('/blog/{post}', [
    'uses' => 'BlogController@show',
    'as'   => 'blog.show'
]);

Route::get('/category/{category}', [
    'uses' => 'BlogController@category',
    'as'   => 'category'
]);

Route::get('/author/{author}', [
    'uses' => 'BlogController@author',
    'as'   => 'author'
]);






