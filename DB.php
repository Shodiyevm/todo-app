<?php
declare(strict_types=1);

class DB{
    public static function connect():PDO{
        return new PDO("mysql:host=localhost;dbname=todoapp","root","2224");
    }


}