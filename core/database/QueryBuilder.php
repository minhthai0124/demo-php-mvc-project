<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select*from {$table}");
        
        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf('insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );    
        
        try {
            $statement = $this->pdo->prepare($sql);             
            $statement->execute($parameters);
            
        } catch(Exeption $e){
            die('Whoops, something went wrong');
        }   
        // die(var_dump($sql));
    }

    public function delete($table, $id)
    {
        
        $sql = sprintf('delete from %s where id = %s', $table,$id);    
        //die(var_dump($sql));
        try {
            $statement = $this->pdo->prepare($sql);             
            $statement->execute();
        } catch(Exeption $e){
            die('Whoops, Cannot delete');
        }   
    }

    public function getUserById($table, $id)
    {
        $sql = sprintf('select * from %s where id = %s',            
            $table, $id);    
        
        // die(var_dump($sql));
        try {
            $statement = $this->pdo->prepare($sql);             
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch(Exeption $e){
            die('Whoops, Cannot get user by id');
        }   
    }

    public function update($table, $name, $id)
    { 
        $sql = sprintf('update %s set name = '."'%s'".' where id = %s',
            $table,$name,$id);    
        
        // die(var_dump($sql));
        try {
            $statement = $this->pdo->prepare($sql);             
            $statement->execute();
        } catch(Exeption $e){
            die('Whoops, Cannot update');
        }   
    }
}