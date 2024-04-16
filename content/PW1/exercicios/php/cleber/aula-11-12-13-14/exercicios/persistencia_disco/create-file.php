<?php
    require_once("../../classes/pessoa.php");

    $gustavo = new pessoa();
    $franciele = new pessoa();
    $rodrigo = new pessoa();

    $gustavo->setPesnome('Gustavo Barros');
    $gustavo->setPessobrenome('da Silveira');

    $franciele->setPesnome('Franciele');
    $franciele->setPessobrenome('de Barros');

    $rodrigo->setPesnome('Rodrigo Barros');
    $rodrigo->setPessobrenome('da Silveira');

    $membros_familia = [$gustavo, $franciele, $rodrigo];

    foreach ($membros_familia as $membro) {
        $fileData[] = [
            'nome' => $membro->getPesnome(),
            'sobrenome' => $membro->getPessobrenome()
        ];
    }
    
    $jsonData = json_encode($fileData, JSON_PRETTY_PRINT);
    file_put_contents('family_members.json', $jsonData);

    $fileData = '';
    foreach ($membros_familia as $membro) {
        $fileData .= $membro->getPesnome() . ' ' . $membro->getPessobrenome() . "\n";
    }

    file_put_contents('family_members.txt', $fileData);
    
    echo 'Arquivos criado com sucesso!';
?>