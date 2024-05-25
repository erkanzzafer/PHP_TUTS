<?php
if (isset($_POST['submit'])) {
echo "yes its works";
}else{
    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    
    <body>
    
        <form action="" method="post">
            <input type="text" placeholder="Enter Name"><br>
            <input type="password" placeholder="Enter Password"><br>
            <input type="submit" name="submit">
    
        </form>
    
    
    
    </body>
    
    </html>';
}

?>
