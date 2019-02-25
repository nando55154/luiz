<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $soma=0;
         $vetor=array();
        for ($i=0; $i <= 50; $i++) {
            $soma=2+$i;
            $vetor[$i]=$soma;
            echo $vetor[$i].'<br>';
        }
        ?>
    </body>
</html>
