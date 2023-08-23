<?php

// Database config and access class
class DB{
    const USER='user';
    const PASS='mysql';
    const HOST='localhost';
    const DB='zimalab_db';
    public static function connToDB() {
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db   = self::DB;

        $conn = new PDO("mysql:dbname=$db;host=$host,$user,$pass");
        return $conn;
    }

}