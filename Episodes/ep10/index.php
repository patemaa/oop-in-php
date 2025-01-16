<?php

require_once "vendor/autoload.php";

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

Storage::resolve()->put('file.txt', 'Hello World!');

//$storage = new S3Storage($client, $_ENV['S3_BUCKET']);
//$storage->put('file.txt', 'Hello World!');
//
//echo 'Done!';