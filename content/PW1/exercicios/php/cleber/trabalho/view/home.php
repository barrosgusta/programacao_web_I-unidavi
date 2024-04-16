<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bem Vindo</title>
</head>
<body>
    <div class="w-full h-[100dvh] grid justify-center items-center content-center gap-5">
        <h1 class="text-center text-3xl uppercase">
            Bem vindo <?= $_SESSION['user'] ?>
        </h1>
        <div class="grid grid-cols-2 justify-center gap-3 px-10">
            <a 
                href="/pessoa" 
                class="text-center transition-all p-3 border rounded-lg shadow-lg hover:scale-110 hover:shadow-xl hover:opacity-80"
            >
                Lista de pessoas
            </a>
            <a 
                href="/logout" 
                class="text-center transition-all p-3 border rounded-lg shadow-lg hover:scale-110 hover:shadow-xl hover:opacity-80"
            >
                Log out
            </a>
        </div>
    </div>
</body>
</html>