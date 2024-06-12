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


//função de pegar o post único
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

//função do mais recente
public function selectRecent($table){
    $sql = "select * from {$table} order by created_at DESC LIMIT 1";

    try {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    } catch (Exception $e) {
        die($e->getMessage());
    }
}

//função dos 4 mais recentes
public function selectAllRecent($table){
    $sql = "select * from {$table} order by created_at DESC LIMIT 4 OFFSET 1";

    try {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    } catch (Exception $e) {
        die($e->getMessage());
    }
}

//função dos 5 mais recentes
public function selectMobile($table){
    $sql = "select * from {$table} order by created_at DESC LIMIT 5";

    try {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    } catch (Exception $e) {
        die($e->getMessage());
    }
}

public function searchPost($table,$search,$category){
    $sql = "select * from {$table} where title like '%{$search}%' and category like '%{$category}%'";

    try {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);

    } catch (Exception $e) {
        die($e->getMessage());
    }
}

}