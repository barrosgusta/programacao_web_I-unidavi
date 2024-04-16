<?php
    require_once 'model/pessoa_model.php';

    $pessoa_model = new PessoaModel();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email    = $_POST['email'];
        $senha = $_POST['senha'];

        $user = $pessoa_model->getPessoaByEmailSenha($email, $senha);
        
        if ($user) {
            $_SESSION['user'] = $user['nome'];
            $_SESSION['userId'] = $user['id'];
            $_SESSION['login_time'] = time();
            $_SESSION['last_req_time'] = time();
            $_SESSION['session_time'] = 0;

            setcookie('user', $user['nome'], (time()+60*5), '/');
            setcookie('login_time', time(), (time()+60*5), '/');
            header('Location: /home');
            exit();
        } else {
            $error = 'E-Mail ou Senha incorretos';
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body>
    <div class="w-full h-[100dvh] flex flex-col justify-center items-center">
        <form method="post" class="border shadow-md rounded-lg p-10 space-y-2">
            <div>
                <label for="email">E-Mail:</label>
                <input class="border rounded-md text-xs p-1 w-52" type="text" id="email" name="email">
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input class="border rounded-md text-xs p-1 w-52" type="password" id="senha" name="senha">
            </div>
            <div class="flex justify-center gap-2 pt-3">
                <button class="transition-all px-4 py-2 border rounded-lg shadow-sm hover:scale-105 hover:shadow-md hover:opacity-80" type="submit">Login</button>
                <a class="transition-all px-4 py-2 border rounded-lg shadow-sm hover:scale-105 hover:shadow-md hover:opacity-80" href="/cadastro">Tela de Cadastro</a>
            </div>
            <?php if (isset($error)): ?>
                <p class="text-center"><?php echo $error; ?></a>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>