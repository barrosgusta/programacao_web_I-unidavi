<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lista Pessoas</title>
</head>
<body>
    <div class="w-full h-[100dvh] grid justify-center items-center content-center gap-6">
        <div class="flex justify-between"> 
            <a 
                href="/home" 
                class="transition-all p-3 border rounded-lg shadow-lg hover:scale-110 hover:shadow-xl hover:opacity-80"
            >
                Página Inicial
            </a>
            <input 
                class="rounded-lg border p-3 shadow-lg" 
                type="text" 
                placeholder="Busca por nome"
                onkeypress="if(event.keyCode == 13) window.location.href = '/pessoa?nome='+this.value"
            >
        </div>
        <div class="border rounded-lg p-2 shadow-lg">
            <table class="text-center">
                <tr class="border-b">
                    <th class="px-3 py-2">Codigo</th>
                    <th class="px-3 py-2">Nome</th>
                    <th class="px-3 py-2">Sobrenome</th>
                    <th class="px-3 py-2">Data de Nascimento</th>
                    <th class="px-3 py-2">E-Mail</th>
                </tr>
                    <?php foreach($pessoas as $pessoa): ?>
                    <tr>
                        <td class="px-3 py-2 border-r"><?= $pessoa->id ?></td>
                        <td class="px-3 py-2 border-r"><?= $pessoa->nome ?></td>
                        <td class="px-3 py-2 border-r"><?= $pessoa->sobrenome ?></td>
                        <td class="px-3 py-2 border-r"><?= $pessoa->data_nascimento ?></td>
                        <td class="px-3 py-2"><?= $pessoa->email ?></td>
                    </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>
</html>