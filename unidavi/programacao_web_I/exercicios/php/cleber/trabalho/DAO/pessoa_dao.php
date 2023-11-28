<?php

class PessoaDAO
{
    private $conection;

    public function __construct()
    {
       $dsn = 'pgsql:host=localhost;dbname=trabalho_pw2';

       $this->conection = new PDO($dsn, 'postgres', '');
    }

    public function insert(PessoaModel $model)
    {
        $sql = "INSERT INTO pessoa (nome, sobrenome, data_nascimento, email, senha) VALUES (:nome, :sobrenome, :data_nascimento, :email, :senha)";

        $stmt = $this->conection->prepare($sql);

        $stmt->bindValue(':nome', $model->nome);
        $stmt->bindValue(':sobrenome', $model->sobrenome);
        $stmt->bindValue(':data_nascimento', $model->data_nascimento);
        $stmt->bindValue(':email', $model->email);
        $stmt->bindValue(':senha', $model->senha);

        $stmt->execute();
    }

    // public function update(PessoaModel $model)
    // {
    //     $sql = "UPDATE pessoa SET nome = :nome WHERE id = :id";

    //     $stmt = $this->conection->prepare($sql);

    //     $stmt->bindValue(':nome', $model->nome);

    //     $stmt->bindValue(':id', $model->id);

    //     $stmt->execute();
    // }

    // public function delete(PessoaModel $model)
    // {
    //     $sql = "DELETE FROM pessoa WHERE id = :id";

    //     $stmt = $this->conection->prepare($sql);

    //     $stmt->bindValue(':id', $model->id);

    //     $stmt->execute();
    // }

    public function select()
    {
        $sql = "SELECT * FROM pessoa";

        $stmt = $this->conection->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    public function selectNameIlike($nome)
    {
        $sql = "SELECT * FROM pessoa WHERE nome ILIKE '%$nome%'";

        $stmt = $this->conection->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function getConnection()
    {
        return $this->conection;
    }
}