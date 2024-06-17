<?php

namespace App\Core\Database;

use PDO, Exception;

class QueryBuilder
{
    
    public function criar ($table, $parameters)
    {
        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)', $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }
    
    public function editar ($table, $id, $parameters)
    {
        $sql = sprintf('UPDATE %s SET %s WHERE %s', $table, 
        implode(',', array_map(function($parameters){
            return $parameters . '=:' . $parameters;
        }, array_keys($parameters))), 'id=:id');

        $parameters["id"] = $id;

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);
        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }
    public function delete ($table, $id)
    {
        $sql = sprintf('DELETE FROM %s WHERE %s', $table, 'id=:id');
        
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(compact('id'));
        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }

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
    public function verificaEmail(string $email){
        // $sql = "select count(*) as contE from users WHERE email = :email";
        $sql = sprintf('SELECT COUNT(*) as contE FROM %s WHERE %s', 'users', 'email = :email');
        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute(compact('email'));
            $linha = $stmt->fetch(PDO::FETCH_ASSOC);
            return ($linha['contE']>0);
        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }
}