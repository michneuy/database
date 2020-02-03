<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $conn = new PDO("mysql:host=$servername;dbname=dbtesting", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->query('SET NAMES utf8');
    // echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>