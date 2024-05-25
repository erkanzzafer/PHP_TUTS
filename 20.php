<?php

    ini_set('error_reporting', E_ALL);
    $connection = mysqli_connect("localhost", "root", "", "loginapp");
    if ($connection) {
         $query = "SELECT * from users";
         $result = mysqli_query($connection, $query);
         if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_assoc($result)) {
                print_r($row);
            }
        }

    }


