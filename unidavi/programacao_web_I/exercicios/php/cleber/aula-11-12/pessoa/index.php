<?php
    require_once("../session.php");
    require_once("../bd/pdo.php");
    require_once("../classes/pessoa.php");
    require_once("../cookie_validate.php");

    if (($_SERVER['REQUEST_METHOD'] == 'POST') and ($_POST['pesnome'] != '')) {
        $pesnome = '%'. $_POST['pesnome'] .'%';


        $sql = "SELECT * FROM tbpessoa WHERE pesnome ilike ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$pesnome]);
        $pessoas = $stmt->fetch(PDO::FETCH_ASSOC);
        $pessoas = [$pessoas];
        
        
    } else {
        $pessoas = $pdo->query("SELECT * FROM tbpessoa")->fetchAll(PDO::FETCH_ASSOC);
    }

?>

<a href="cadastropessoa.html">Cadastrar Pessoa</a>

<form method="post">
    <div>
        <label for="pesnome">Nome:</label>
        <input type="text" id="pesnome" name="pesnome">
    </div>
    <div>
        <button type="submit">Buscar</button>
    </div>
<table border>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pessoas as $pessoa): ?>
            <tr>
                <td><?php echo $pessoa['pescodigo']; ?></td>
                <td><?php echo $pessoa['pesnome']; ?></td>
                <td><?php echo $pessoa['pesemail']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>