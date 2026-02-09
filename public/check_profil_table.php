<?php
require_once 'app/init.php';

$db = new Database;
$db->query("DESCRIBE profil_masjid");
$rows = $db->resultSet();

echo "Columns in profil_masjid table:\n";
foreach ($rows as $row) {
    echo $row['Field'] . " (" . $row['Type'] . ")\n";
}
