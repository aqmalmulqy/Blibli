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

$router->get('/admin/products', 'ProductsController@index');
$router->post('/admin/products', 'ProductsController@store');
$router->get('/admin/product/{id}', 'ProductsController@show');
$router->put('/admin/product/{id}', 'ProductsController@update');
$router->delete('/admin/product/{id}', 'ProductsController@destroy');

$router->get('/admin/comments', 'CommentController@index');
$router->post('/admin/comments', 'CommentController@store');
$router->get('/admin/comment/{id}', 'CommentController@show');
$router->put('/admin/comment/{id}', 'CommentController@update');
$router->delete('/admin/comment/{id}', 'CommentController@destroy');


$router->get('/admin/categoriesposts', 'CategoriespostsController@index');
$router->post('/admin/categoriesposts', 'CategoriespostsController@store');
$router->get('/admin/categoriesposts/{id}', 'CategoriespostsController@show');
$router->put('/admin/categoriesposts/{id}', 'CategoriespostsController@update');
$router->delete('/admin/categoriesposts/{id}', 'CategoriespostsController@destroy');