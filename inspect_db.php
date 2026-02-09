<?php
// Direct connection to inspect database
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'dm';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully\n";
    
    echo "Table: profil_masjid\n";
    $stmt = $dbh->query("DESCRIBE profil_masjid");
    $columns = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($columns as $col) {
        echo $col['Field'] . " - " . $col['Type'] . "\n";
    }
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
