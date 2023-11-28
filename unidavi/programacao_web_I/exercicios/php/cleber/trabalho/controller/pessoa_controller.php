<?php 

class PessoaController
{
    public static function index()
    {
        include 'model/pessoa_model.php';

        $pessoa_model = new PessoaModel();

        $nome = '';

        if (isset($_GET['nome'])) {
            $nome = $_GET['nome'];
        }

        if ($nome != '') {
            $pessoas = $pessoa_model->getUsersByNameIlike($nome);
        } else {
            $pessoas = $pessoa_model->getAllRows();
        }

        include 'view/modules/pessoa/lista_pessoa.php';
    }

    public static function login()
    {
        include 'view/modules/pessoa/login.php';
    }
    public static function logout()
    {
        include 'view/modules/pessoa/logout.php';
    }

    public static function cadastro()
    {
        include 'view/modules/pessoa/cadastro.php';
    }

    public static function insert()
    {
        include 'model/pessoa_model.php';

        $model = new PessoaModel();

        $model->nome            = $_POST['nome'];
        $model->sobrenome       = $_POST['sobrenome'];
        $model->data_nascimento = $_POST['data_nascimento'];
        $model->email           = $_POST['email'];
        $model->senha           = $_POST['senha'];

        if ($model->nome == '' || $model->sobrenome == '' || $model->data_nascimento == '' || $model->email == '' || $model->senha == '') {
            header('Location: /cadastro');
            exit();
        }

        $model->insert();

        header('Location: /login');
    }

    // public static function update()
    // {
    //     include 'Model/PessoaModel.php';

    //     $model = new PessoaModel();
    //     $model->pessoa_codigo = $_POST['codigo'];
    //     $model->pessoa_nome = $_POST['nome'];
    //     $model->update();

    //     header('Location: /pessoa');
    // }

    // public static function delete()
    // {
    //     include 'Model/PessoaModel.php';

    //     $model = new PessoaModel();
    //     $model->pessoa_codigo = $_POST['codigo'];
    //     $model->delete();

    //     header('Location: /pessoa');
    // }
}