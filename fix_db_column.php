<?php
// Fix database column name
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'dm';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully\n";
    
    // Check if nama_masjid exists
    $stmt = $dbh->query("SHOW COLUMNS FROM profil_masjid LIKE 'nama_masjid'");
    if ($stmt->fetch()) {
        echo "Found column 'nama_masjid'. Renaming to 'nama'...\n";
        $dbh->exec("ALTER TABLE profil_masjid CHANGE nama_masjid nama VARCHAR(100) NOT NULL");
        echo "Column renamed successfully.\n";
    } else {
        echo "Column 'nama_masjid' not found. Checking for 'nama'...\n";
        $stmt = $dbh->query("SHOW COLUMNS FROM profil_masjid LIKE 'nama'");
        if ($stmt->fetch()) {
            echo "Column 'nama' already exists.\n";
        } else {
            echo "Neither 'nama_masjid' nor 'nama' found!\n";
        }
    }
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
