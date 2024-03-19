<?php
namespace App\Repository;

use App\Database\Database;
use App\Model\Cliente;
use PDO;

class ClienteRepository 
{
    private $conn;

    public function __construct() 
    {
        $this->conn = Database::getInstance();
    }


    public function insertCliente(Cliente $cliente) 
    {
        $nome = $cliente->getNome();
        $email = $cliente->getEmail();
        $cidade = $cliente->getCidade();
        $cidade = $cliente->getCidade();
        $estado = $cliente->getEstado();

        $query = "INSERT INTO clientes (nome, email, cidade, estado) VALUES (:nome, :email, :cidade, :estado)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":cidade", $cidade);
        $stmt->bindParam(":cidade", $cidade);
        $stmt->bindParam(":estado", $estado);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }


    public function getAll() 
    {
        $query = "SELECT * FROM clientes";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getById(Cliente $cliente) {
        $id = $cliente->getId();
        $query = "SELECT * FROM cliente WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id , PDO::PARAM_INT);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function update(Cliente $cliente) 
    {
        $query = "SELECT * FROM clientes";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function delete(Cliente $cliente) 
    {
        $query = "SELECT * FROM clientes";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}