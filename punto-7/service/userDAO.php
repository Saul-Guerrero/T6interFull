
<?php 
include "connection.php";

function getAllUsers() {
    return mysqli_query(CONNECTION, "SELECT * FROM usuarios" );
    
}

function getUserById($Id) {
    return mysqli_query(CONNECTION, "SELECT * FROM usuarios WHERE identificacion : $Id");
}

// print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>