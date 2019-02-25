<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $vetor=array();
        for ($i=0; $i <= 50; $i++) {
            $vetor[$i]=42;
        echo "o vetor na posição [".$i."]" .$vetor[$i] . '<br>';
        }
        ?>
    </body>
</html>
