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
        $x=44;
        $y=79;
        function hlo()
        {
            echo $GLOBALS['x'];
            echo "<br>";
            echo $GLOBALS['y'];
        }
        hlo();
        ?>
    </body>
</html>
