<?php
$router->get('/', function () {
    return redirect(env('APP_NAME', false));
});

$router->get(env('APP_NAME', false), function () {
    return env('APP_NAME', false);
});

$router->group(['prefix' => env('APP_NAME', false)], function () use ($router) {
    //Tape Manager
    $router->get('tapes', ['uses' => 'TapeController@index']);
    $router->get('tapes/{id}', ['uses' => 'TapeController@tape']);
    $router->post('tapes', ['uses' => 'TapeController@create']);
    $router->delete('tapes/{id}', ['uses' => 'TapeController@delete']);
    $router->put('tapes/{id}', ['uses' => 'TapeController@update']);

    //Tape Status
    $router->get('tapestatus', ['uses' => 'TapeStatusController@index']);
    $router->get('tapestatus/{id}', ['uses' => 'TapeStatusController@tapestatus']);
    $router->post('tapestatus', ['uses' => 'TapeStatusController@create']);
    $router->delete('tapestatus/{id}', ['uses' => 'TapeStatusController@delete']);
    $router->put('tapestatus/{id}', ['uses' => 'TapeStatusController@update']);

    //Tape Types
    $router->get('tapetypes', ['uses' => 'TapeTypeController@index']);
    $router->get('tapetypes/{id}', ['uses' => 'TapeTypeController@tapetype']);
    $router->post('tapetypes', ['uses' => 'TapeTypeController@create']);
    $router->delete('tapetypes/{id}', ['uses' => 'TapeTypeController@delete']);
    $router->put('tapetypes/{id}', ['uses' => 'TapeTypeController@update']);
});