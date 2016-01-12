<?php
include 'Ubaby.php';
$config = array(
    'APP_PATH' => './',
    'TEMP_FILE'=> '/temp/',
    'PATH_MOD' => 'PATHINFO',
    'USE_SESSION'=>true,
    'Mongo' => array(
        'host' => 'mongodb://172.17.11.146:27017',
        'database_name' => 'hd',
        'username'      => 'root',
        'password'      => 'root',
        ),
    'Redis' => array(
        'host' => '172.17.11.146',
        'port' => 6379
    ),
    'Server_url' => 'http://172.17.11.202:8080/statisticsweb/restapi/v1/collectors',
    'Qiniu'=>array(
        'AK' => '6tI6-JGg5qR3e8nn22F_p9LxHsZKbehRfHABej2Y',
        'SK' => 'nT_3jMqMCsFcHldEyM5HZEjrG7hCmodx8mg1h4uq',
        'audio' =>array(
            'bucket'=>'test-pub-vod-audio',
            'domain'=>'http://t-audiop.ubaby.cn/'
        ),
        'image' =>array(
            'bucket'=>'test-pub-generic-pic',
            'domain'=>'http://t-image.ubaby.cn/'
        ),
        'article'=>array(
            'bucket'=>'test-pub-generic-article',
            'domain'=>'http://t-article.ubaby.cn/'
        ),
    )
    );
Ubaby::getInstance($config)->run();
