<?php
    $servername = "sql11.freemysqlhosting.net";
    $username = "sql11506563";
    $password = "ZZQAsFqvph";
    $database = "sql11506563";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        # code...
        die('failed to connect to MySQL: '.mysqli_connect_error());
    } else {
        # code...
        echo 'connected successfully';
    }
   
?>