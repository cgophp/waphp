<?php

use Workerman\Worker;

define('WA_ROOT_PATH', dirname(__DIR__));

require_once WA_ROOT_PATH . '/vendor/autoload.php';

$http_worker = new Worker('http://0.0.0.0:12345');

$http_worker->count = 8;

$http_worker->onMessage = function ($connection, $request) {
    //$request->get();
    //$request->post();
    //$request->header();
    //$request->cookie();
    //$request->session();
    //$request->uri();
    //$request->path();
    //$request->method();

    $connection->send("Hello World---" . date("Y-m-d H:i:s"));
};

Worker::runAll();
