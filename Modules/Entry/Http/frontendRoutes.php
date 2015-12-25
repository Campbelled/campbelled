<?php

$router->bind('entries', function ($id) {
    return app(\Modules\Entry\Repositories\EntryRepository::class)->find($id);
});
get('entry/{entries}', ['uses' => 'Frontend\EntryController@show', 'as' => 'entry.show']);
$router->get('/', function () {
    return redirect('http://laravel.com');
});
