<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'dm';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully.\n";

    echo "Table: profil_masjid\n";
    $stmt = $pdo->query("DESCRIBE profil_masjid");
    $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($columns as $col) {
        echo $col['Field'] . "\n";
    }

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
