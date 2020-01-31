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
       $x=[[1,2,3],[3,4,5],['KANAK','CHETAN','ASIF']];
      // for($i=0;$i<sizeof($x);$i++)
       foreach($x as $i)
     //  {
           //for($j=0;$j<3;$j++)
       {
           foreach($i as $j)
           {
           echo $j." ";
   
           }          
              // echo $x[$i][$j]." ";
           
             echo "<br>";
       }     
//  }
        ?>
    </body>
</html>
