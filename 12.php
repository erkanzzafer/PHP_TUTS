<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php

    function toplama($sayi1, $sayi2 = null)
    {

        if ($sayi2 !== null) {
            $sonuc = $sayi1 + $sayi2;
        } else {
            $sonuc = $sayi1;
        }
        echo "" . $sonuc . "";
    }


    toplama(10,203) ;
    ?>

</body>

</html>