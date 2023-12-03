<?php 
    const CONNECTION = new mysqli("localhost", "root","", "mi_proyecto");
    if (CONNECTION->connect_errno){
        echo "fallas en conexión";
        exit();
    }
?>