<?php 
function connectDB() {
    $host = DB_HOST;
    $port = DB_PORT;
    $dbname = DB_NAME;

    try{
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", DB_USER , DB_PASS);
        return $conn;
    }catch(Exception $e){
        echo "ERROR:". $e->getMessage();
        echo "<hr>";
    }
}
?>