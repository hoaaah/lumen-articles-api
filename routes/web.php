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

$router->get('blog', function() {
    return "test";
});

$router->get('blog/{slug}', function($slug){
    return 'Isi Blog '.$slug;
});

$router->post('blog/create', function(){
    return "Posting Data";
});
/**
 * Routes for resource article
 */
$router->get('article', 'ArticlesController@all');
$router->get('article/{id}', 'ArticlesController@get');
$router->post('article', 'ArticlesController@add');
$router->put('article/{id}', 'ArticlesController@put');
$router->delete('article/{id}', 'ArticlesController@remove');
