<?php

class Umongo {

    public static function MDB(){
//         C('Mongo')['username'];
//         C('Mongo')['password'];
        $connection = new MongoClient(C('Mongo')['host']);
        return $connection->selectDB( C('Mongo')['database_name']);

    }
}