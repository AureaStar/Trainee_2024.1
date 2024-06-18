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
    public function update($table, $id, $values) {
        $sql = "UPDATE {$table} SET ";
        $params = [];
        $sets = [];
    
        foreach ($values as $item) {
            if(!empty($item['values'])) {
                $sets[] = "{$item['name']} = ?";
                $params[] = $item['values'];
            }
        }
    
        $sql .= implode(", ", $sets);
        $sql .= " WHERE id = ?";
        $params[] = $id;
        
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($params);
        }catch (Exception $e) {
         $sql = $e->getMessage();
        
        }
    
        return $sql;
    }
    
}