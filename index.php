<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    function primos_0a100 () {
    for($i = 1; $i <= 100; $i++)
{
    $divisores = 0;
    for($j = $i; $j >= 1; $j--){
        if (($i % $j) == 0) {
            $divisores++;
                         } 
    }
    if ($divisores == 2){
        echo $i . ', ';
    }
}
    }
    primos_0a100()
    ?>
    </body>
</html>
