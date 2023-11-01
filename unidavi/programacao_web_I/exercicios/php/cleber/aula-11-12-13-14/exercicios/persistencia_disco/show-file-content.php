<?php 
    $fileData = file_get_contents('family_members.json');
    $familyMembers = json_decode($fileData, true);

    foreach ($familyMembers as $member) {
        echo $member['nome'] . ' ' . $member['sobrenome'] . '<br>';
    }
?>