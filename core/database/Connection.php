<?php

class Connection 
{
    //connect the mysql database 
    public static function make($config)
    {
        try{
           // return new PDO('mysql:host=127.0.0.1:3306;dbname=learning-php', 'root','123');
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password']
            );

        } catch (PDOExeption $e){
            die('Could not connect');
        }
    }
}

