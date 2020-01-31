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
         $dbservername="localhost";
       $user="root";
       $password="";
       $dbname="school";
       $conn=  mysqli_connect($dbservername,$user,$password,$dbname);
       if($conn)
       {
           $q="select * from students where id=3";
           $res= mysqli_query($conn,$q);
       if(mysqli_num_rows($res)>0)
       {
           $x=mysqli_fetch_assoc($res);
           echo  $x['name']." "."has joined on". " ".$x['date']."<br>";
           echo "Address is ".$x['address'];
       }
       }
        ?>
    </body>
</html>
