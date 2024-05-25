<?php
if (isset($_POST['submit'])) {
    ini_set('error_reporting', E_ALL);


    $name = array("ali", "veli", "hakan", "ahmet");
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "tebrikler";
    $connection = mysqli_connect("localhost", "root", "", "loginapp");
    $username=mysqli_real_escape_string($connection, $username);
    if ($connection) {
        echo "we are connected";
        $query = "DELETE FROM users WHERE id=12";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die('QUERY FAILED' . mysqli_error($connection));
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
    <h3>SİL</h3>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Enter Name"><br>
            <input type="password" name="password" placeholder="Enter Password"><br>
            <input type="submit" name="submit"> 
        </form>    
    </body>
    </html>';
}

