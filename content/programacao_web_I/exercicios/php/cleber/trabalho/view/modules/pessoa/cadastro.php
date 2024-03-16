<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cadastro</title>
</head>
<body>
    <div class="w-full h-[100dvh] flex justify-center items-center">
        <form action="/pessoa/form/insert" method="post" class="border shadow-md rounded-lg p-10 space-y-3 flex flex-col">
            <div>
                <label for="nome">Nome:</label>
                <input class="border rounded-md text-xs p-1 w-full" type="text" id="nome" name="nome">
            </div>
            <div>
                <label for="sobrenome">Sobrenome:</label>
                <input class="border rounded-md text-xs p-1 w-full" type="text" id="sobrenome" name="sobrenome">
            </div>
            <div>
                <label for="data_nascimento">Data de Nascimento:</label>
                <input class="border rounded-md text-xs p-1 w-full" type="date" id="data_nascimento" name="data_nascimento">
            </div>
            <div>
                <label for="email">E-Mail:</label>
                <input class="border rounded-md text-xs p-1 w-full" type="text" id="email" name="email">
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input class="border rounded-md text-xs p-1 w-full" type="password" id="senha" name="senha">
            </div>
            <div class="w-full flex justify-center gap-2">
                <button class="transition-all px-4 py-2 border rounded-lg shadow-sm hover:scale-105 hover:shadow-md hover:opacity-80" type="submit">Cadastrar</button>
                <a class="transition-all px-4 py-2 border rounded-lg shadow-sm hover:scale-105 hover:shadow-md hover:opacity-80" href="/login">Tela de Login</a>
            </div>
        </form>
    </div>
</body>
</html>