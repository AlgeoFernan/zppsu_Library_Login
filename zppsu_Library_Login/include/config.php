<?php
$host = 'localhost';
$dbname = 'library_db';
$dbusername = 'root';
$dbpassword = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connection success!";
    } catch (PDOException $e) {
        die("CONNECTION FAILED: " . $e->getMessage());
    }

?>