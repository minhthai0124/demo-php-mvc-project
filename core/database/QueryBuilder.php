<?php

class QueryBuilder
{
    protected $pdo;

    //construction 
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    //select all records in the table
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select*from {$table}");
        
        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    //insert data in the table 
    public function insert($table, $parameters)
    {
        //sql insert statement
        $sql = sprintf('insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );    
        //die(var_dump($sql));
        
        //execute insert the statement
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
         //sql delete statement
        $sql = sprintf('delete from %s where id = %s', $table,$id);    
        //die(var_dump($sql));
        
        try {
            $statement = $this->pdo->prepare($sql);             
            $statement->execute();
        
        } catch(Exeption $e){
            die('Whoops, something went wrong');
        }   
    }

    public function getUserById($table, $id)
    {
        //sql get data by ID statement
        $sql = sprintf('select * from %s where id = %s',            
            $table, $id);  
        // die(var_dump($sql));

        //execute get data by ID statement
        try {
            $statement = $this->pdo->prepare($sql);             
            $statement->execute();
            
            //return to get the data of the table!!!
            return $statement->fetchAll(PDO::FETCH_CLASS);

        } catch(Exeption $e){
            die('Whoops, something went wrong');
        }   
    }

    public function update($table, $name, $id)
    { 
        //sql update data by ID statement
        $sql = sprintf('update %s set name = '."'%s'".' where id = %s',
            $table,$name,$id);    
        // die(var_dump($sql));

        //execute update data by ID statement
        try {
            $statement = $this->pdo->prepare($sql);             
            $statement->execute();

        } catch(Exeption $e){
            die('Whoops, something went wrong');
        }   
    }
}