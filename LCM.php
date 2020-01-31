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
        $a=10;
        $b=25;
        $c=10;
        $d=25;
        $l=1;
        $x;
        for($x=2;$a>1||$b>1||$c>1||$d>1;$x++)
        {
         while($a%$x==0||$b%$x==0||$c%$x==0||$d%$x==0) 
         {
          if($a%$x==0)
            {
              $a=$a/$x; 
            }
            if($b%$x==0)
            {
              $b=$b/$x; 
            }
            if($c%$x==0)
            {
              $c=$c/$x; 
            }
            if($d%$x==0)
            {
              $d=$d/$x; 
            }
            $l=$l*$x;
         }
        }
        echo $l;
        echo "<br >";
        echo "hello world !";
        ?>
    </body>
</html>
