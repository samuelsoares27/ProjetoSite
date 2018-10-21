<?php

$host     = "localhost";
$dbname   = "db_site";
$username = "root";
$password = "";

try {
  $conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>