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
           if(isset($_POST['submit']))
           {
               $user=$_POST['name'];
               $pass=$_POST['pass'];
               $id=$_POST['id'];
               $sql="insert into employee(name,id,password) values('$user','$id','$pass')";
               $res=  mysqli_query($conn,$sql);
               if($res)
               {
                   echo "successfully data inserted";
               }
               else
               {
                   echo "Something went wrong";
               }
               
           }
       } 
        ?>
    </body>
</html>
