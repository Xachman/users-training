<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Storage;
// Routes

$app->get('/install', function (Request $request, Response $response, array $args) {
    $storage = new Storage();

    $storage->query(
        "CREATE TABLE IF NOT EXISTS users (".
        "id INT NOT NULL AUTO_INCREMENT,".
        "username VARCHAR(50) NOT NULL,".
        "email VARCHAR(255) NOT NULL,".
        "password VARCHAR(255) NOT NULL,".
        "PRIMARY KEY (id)".
        ")ENGINE=INNODB;"
    );

    return $this->renderer->render($response, 'install.phtml', $args);
});
