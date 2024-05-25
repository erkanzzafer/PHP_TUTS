<?php
if (isset($_POST['submit'])) {
    ini_set('error_reporting', E_ALL);
    echo "yes its works";

    $name = array("ali", "veli", "hakan", "ahmet");
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "tebrikler";
    $connection = mysqli_connect("localhost", "root", "", "loginapp");
    if ($connection) {
        echo "we are connected";
        $query = "INSERT INTO users(username,password) VALUES ('$username','$password')";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('QUERY FAILED');
        }
    }
} else {
    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body>
    <h3>KAYIT OL</h3>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Enter Name"><br>
            <input type="password" name="password" placeholder="Enter Password"><br>
            <input type="submit" name="submit"> 
        </form>    
    </body>
    </html>';
}

