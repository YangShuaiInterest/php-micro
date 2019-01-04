<?php
use \NoahBuscher\Macaw\Macaw;

Macaw::get('/', function () {
    var_dump(new \App\Controllers\Users());die;
});

Macaw::get('/users', 'App\Controllers\UsersController@index');

Macaw::dispatch();