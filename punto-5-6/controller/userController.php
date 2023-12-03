<?php
    include "./service/userDAO.php";
    include "./model/user.php";
    
    function getUsers() {
        $usersQuery = getAllUsers();
        $userList = array();

        while($row = mysqli_fetch_assoc($usersQuery)) {
            $user = new User(
                $row["Id"],
                $row["nombre"],
                $row["apellido"],
                $row["cedula"],

            );
            $userList[] = $user;
        }
        return $userList;
    }


?>