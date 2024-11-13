<?php
function DB_connect()
{
    $host = DB_HOST;
    $db = DB_NAME;
    $user = DB_USER;
    $port = DB_PORT;
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db;port=$port", DB_USER, DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (Exception $th) {
        echo "Connection failed: " . $th->getMessage();
    }
}