<?php
    $host = 'localhost';
    $dbname = 'barrosgusta';
    $user = 'postgres';
    $password = '';

    try {
        $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
