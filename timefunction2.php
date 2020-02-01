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
        $date=getdate();
        print_r($date);
        echo $date['weekday']."<br>";//we can define each part in different echo's.
        echo "Today's Date is : ".$date['mon']." ".$date['month']." ".$date['year']."<br>";
        echo "Time is : ".$date['hours'].":".$date['minutes'].":".$date['seconds'];
       
        ?>
    </body>
</html>
