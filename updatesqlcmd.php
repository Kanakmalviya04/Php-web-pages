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
        $conn=mysqli_connect($dbservername,$user,$password,$dbname);
        if($conn)
        {
           $sql="update employee set id=4040 where name='vivek roy'";
           $res=  mysqli_query($conn,$sql);
           if($res)
           {
               echo 'successfully updated';
           }
           
        }
        ?>
    </body>
</html>
