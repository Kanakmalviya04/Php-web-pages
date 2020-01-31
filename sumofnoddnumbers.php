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
         $n=5;
        $x=0;
        for($i=1;$i<=$n;$i++)
        {
            $x=$x+($i*2-1);
        }
        echo "Sum of $n ODD number is = ",$x;
        ?>
    </body>
</html>
