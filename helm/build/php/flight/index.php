<?php
require 'vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//echo $_ENV['S3_BUCKET'];
//echo $_ENV['MYSQL_HOST'];
//echo $_ENV['MYSQL_DB'];
//echo $_ENV['MYSQL_USER'];
//echo $_ENV['MYSQL_PASS'];

Flight::register('db', 'PDO', [
    'mysql:host='. $_ENV['MYSQL_HOST'] .';dbname='. $_ENV['MYSQL_DB'].';port='. $_ENV['MYSQL_PORT'],
    $_ENV['MYSQL_USER'],
    $_ENV['MYSQL_PASS']
]);


Flight::route('/', function(){
    $db = Flight::db();
    $x = $db->query("SELECT * FROM `test_table`");
    while ($row = $x->fetch()) {
        echo json_encode($row);
    }

    //print_r($x);
});

Flight::start();