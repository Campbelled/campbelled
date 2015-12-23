<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/entry'], function (Router $router) {
    $router->bind('entries', function ($id) {
        return app('Modules\Entry\Repositories\EntryRepository')->find($id);
    });
    get('entries', ['as' => 'admin.entry.entry.index', 'uses' => 'EntryController@index']);
    get('entries/create', ['as' => 'admin.entry.entry.create', 'uses' => 'EntryController@create']);
    post('entries', ['as' => 'admin.entry.entry.store', 'uses' => 'EntryController@store']);
    get('entries/{entries}/edit', ['as' => 'admin.entry.entry.edit', 'uses' => 'EntryController@edit']);
    put('entries/{entries}/edit', ['as' => 'admin.entry.entry.update', 'uses' => 'EntryController@update']);
    delete('entries/{entries}', ['as' => 'admin.entry.entry.destroy', 'uses' => 'EntryController@destroy']);
// append

});
