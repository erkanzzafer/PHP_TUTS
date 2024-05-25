<?php
if (isset($_POST['submit'])) {
    echo "yes its works";


    if (strlen($_POST['username'])<5){
        echo "isim en az 6 karakter olmalı";
    }

    if (strlen($_POST['password'])< 5){
        echo "Şifre en az 6 karakter olmalı";
    }

    //echo $_POST['username'];
    //echo $_POST['password'];
} else {
    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body>
    
        <form action="" method="post">
            <input type="text" name="username" placeholder="Enter Name"><br>
            <input type="password" name="password" placeholder="Enter Password"><br>
            <input type="submit" name="submit">
    
        </form>
    
    
    
    </body>
    
    </html>';
}

?>