<?php
    require_once 'DAO/pessoa_dao.php';

class PessoaModel
{
    public $id, $nome, $sobrenome, $data_nascimento, $email, $senha;

    public function insert()
    {
        $dao = new PessoaDAO();

        $dao->insert($this);

    }

    // public function update()
    // {
    //     $dao = new PessoaDAO();

    //     $dao->update($this);
    // }

    // public function delete()
    // {
    //     $dao = new PessoaDAO();

    //     $dao->delete($this);
    // }

    public function getUsersByNameIlike($nome)
    {
        $dao = new PessoaDAO();

        return $dao->selectNameIlike($nome); 
    }

    public function getAllRows()
    {
        $dao = new PessoaDAO();

        return $dao->select();
    }
    public function getPessoaByEmailSenha(string $email, string $senha)
    {
        $dao = new PessoaDAO();
        
        $connection = $dao->getConnection();

        $sql = 'SELECT * FROM pessoa WHERE email = :email AND senha = :senha';

        $stmt = $connection->prepare($sql);

        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);

        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}