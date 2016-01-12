<?php
include 'Ubaby.php';
$config = array(
    'APP_PATH' => './',
    'TEMP_FILE'=> '/temp/',
    'PATH_MOD' => 'PATHINFO',
    'USE_SESSION'=>true,
    'Mongo' => array(
        'host' => 'mongodb://172.16.0.9:27017',
        'database_name' => 'hd',
        'username'      => 'root',
        'password'      => 'root',
        ),
    'Redis' => array(
        'host' => '172.17.11.8',
        'port' => 6379
    )
    );
Ubaby::getInstance($config)->run();
