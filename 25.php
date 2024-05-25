<?php
if (isset($_POST['submit'])) {
    echo $_POST['isim'];
} else {
    echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" >
        <input type="text"  placeholder="isim giriniz" name="isim"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>';
}