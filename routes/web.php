<?php
use \NoahBuscher\Macaw\Macaw;

Macaw::get('/', function () {

});

Macaw::get('/users', 'App\Controllers\UsersController@index');

Macaw::dispatch();