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
       $n=7;
       $fact=1;
       for($i=1;$i<=$n;$i++)
       {
           $fact=$fact*$i;
       }
       echo "Factorial of $n is = ",$fact;
        ?>
    </body>
</html>
