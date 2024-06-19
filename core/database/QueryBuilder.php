<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
 
    public function deleteFromId ($table,$id)
    {
        $sql = "DELETE FROM posts WHERE id=? ";
    
        try{
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);
        } catch (Exception $e) {
            die($e->getMessage());
        
        }
        
    
    }

    public function findOne($table, $id) {
        $sql = "select * from {$table} where id=?";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function update($table, $id, $parameters) {
        $sql = sprintf('UPDATE %s SET %s WHERE %s', $table, 
        implode(',', array_map(function($parameters){
            return $parameters . '=:' . $parameters;
        }, array_keys($parameters))), 'id=:id');

        $parameters["id"] = $id;
        
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);
        }catch (Exception $e) {
         die($e->getMessage());
        
        }

    }

    public function selectOne($table, $id){
        $sql = "select * from {$table} where id={$id}";
    
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_CLASS);
    
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
}