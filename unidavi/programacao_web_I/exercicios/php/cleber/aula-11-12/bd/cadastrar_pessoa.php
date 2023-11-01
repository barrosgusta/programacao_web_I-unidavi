<?php    
    require_once("pdo.php");
    require_once("../classes/pessoa.php");

    $aDados = array($_POST['primeiro_nome'],
                            $_POST['sobrenome'],
                            $_POST['email'],
                            $_POST['password'],
                            $_POST['cidade'],
                            $_POST['estado']);

    $pdo->beginTransaction();
    try {
        $sql = "INSERT INTO tbpessoa (pesnome, pessobrenome, pesemail, pespassword, pescidade, pesestado) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt= $pdo->prepare($sql);
        $stmt->execute($aDados);
        $pdo->commit();
        header("Location: ../index.php");
    } catch (PDOException $e) {
        $pdo->rollback();
        echo "Error: " . $e->getMessage();
    }
?>