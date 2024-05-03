<?php 

// Config
$host = "localhost";
$user = "dhernandezortiz1";
$pass = "dhernandezortiz1";
$dbname = "dhernandezortiz1";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getConnection() {
    global $conn;
    return $conn;
}

function runQuery($query) {
    global $conn;
    $results = mysqli_query($conn, $query);
    error_log($query);
    return $results;
}

?>