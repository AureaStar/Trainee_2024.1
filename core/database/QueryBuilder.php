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
            echo "1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$id]);
            echo "2";
        } catch (Exception $e) {
            die($e->getMessage());
        
        }
        
    
    }
}