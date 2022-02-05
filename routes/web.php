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

$router->get('/admin/pages', 'PageController@index');
$router->post('/admin/pages', 'PageController@store');
$router->get('/admin/page/{id}', 'PageController@show');
$router->put('/admin/page/{id}', 'PageController@update');
$router->delete('/admin/page/{id}', 'PageController@destroy');

$router->get('/admin/users', 'UserController@index');
$router->post('/admin/users', 'UserController@store');
$router->get('/admin/user/{id}', 'UserController@show');
$router->put('/admin/user/{id}', 'UserController@update');
$router->delete('/admin/user/{id}', 'UserController@destroy');

$router->get('/admin/products', 'ProductController@index');
$router->post('/admin/products', 'ProductController@store');
$router->get('/admin/product/{id}', 'ProductController@show');
$router->put('/admin/product/{id}', 'ProductController@update');
$router->delete('/admin/product/{id}', 'ProductController@destroy');