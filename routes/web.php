<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/admin/category', 'CategoryController@index');
$router->get('/admin/category/{id}', 'CategoryController@show');
$router->post('/admin/category', 'CategoryController@store');
$router->put('/admin/category/{id}', 'CategoryController@update');
$router->delete('/admin/category/{id}', 'CategoryController@delete');