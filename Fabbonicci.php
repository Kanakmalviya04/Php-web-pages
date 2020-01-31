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
        $n=15;
        $x=0;
        $y=1;
        $z=0;
        echo $x;
        echo "<br>";
        for($i=1;$i<=$n-2;$i++)
        {
            $x=$y+$z;
            $y=$z;
            $z=$x;
            echo $x;
            echo "<br>";
        }
        ?>
    </body>
</html>
