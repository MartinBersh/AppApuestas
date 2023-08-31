<?php

class conection
{
    public static function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=appapuestas","root","");
        return $link;
    }
}