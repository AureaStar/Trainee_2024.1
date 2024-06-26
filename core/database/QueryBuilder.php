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

    public function login ($email, $password)
    {
        $sql = 'SELECT * FROM users WHERE email = :email AND password = :password';

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $variavel = $stmt->fetch(PDO::FETCH_ASSOC);

            return $variavel['id'];

        } catch (Exception $e) {
            die ($e->getMessage());
        }
    }

    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $inicio = null, $rows_count = null)
    {
        if ($table=='users'){
            $sql = "select * from {$table}";
        }
        else{
            $sql = "select * from {$table} order by created_at DESC";
        }

        if($inicio >= 0 && $rows_count > 0){
            $sql .= " LIMIT {$inicio}, {$rows_count}";
        }

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

//função de pegar o post único

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


    public function insert($table, $parameters)
    {
        $sql = sprintf('INSERT INTO %s (%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)), 
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);

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
    public function countAll($table)
    {
        $sql = "select COUNT(*) from {$table}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            return intval($stmt->fetch(PDO::FETCH_NUM)[0]);

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}