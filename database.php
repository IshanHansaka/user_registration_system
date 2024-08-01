<?php
    $host = "localhost";
    $username = "root";
    $password = "ishan123";
    $database = "sample";

    //sending connection
    $connection = new mysqli($host, $username, $password, $database);

    //check connection established or not
    if ($connection->connect_error) {
        die("connection Error :".$connection->connect_error);
    }

    echo "connected successfully";
?>