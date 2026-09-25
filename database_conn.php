<?php 
    $host = "localhost";
    $username = "root";
    $password = " ";
    $database = "ecommerce";

    $conn = mysqli_connect($host, $username, $password, $database);

    if (!conn) {
        die("Failed to connect" . mysqli_connect_error());
    }

    echo "Succesful";s
?>