<?php

use \NoahBuscher\Macaw\Macaw;

Macaw::get('/', function () {
    echo 'Hello world!';
});
Macaw::get('/home', function () {
    echo 'Hello Home!';
    throw new \Exception("test ");
});

Macaw::get('/news', "app\controllers\NewsController@test");


Macaw::error(function () {
    throw new \Exception("not found");
});

Macaw::dispatch();


