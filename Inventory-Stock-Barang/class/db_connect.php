<?php  
    $mysqli = new mysqli("localhost", "root", "", "data_barang");

    if($mysqli->connect_errno){
        echo "Failed to connect to MySQL : ". $mysqli;
    }
?>