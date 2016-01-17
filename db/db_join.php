<?php 
    $servername ="localhost";
    $username ="root";
    $password ="";

    $connection = new mysqli($servername, $username, $password);

        if($connection->connect_error){
            die("Connection Failed: " .$connection->connect_error);
        }
    //echo "connected Successfully";
?>