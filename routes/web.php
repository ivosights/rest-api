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

$app->get('/', function () use ($app) {
    return redirect('articles');
});

$app->get('articles', 'ArticleController@index');
$app->post('articles', 'ArticleController@create');
$app->get('articles/{id}', 'ArticleController@detail');
$app->put('articles/{id}', 'ArticleController@update');
$app->delete('articles/{id}', 'ArticleController@delete');
