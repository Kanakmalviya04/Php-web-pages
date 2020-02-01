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
         $password=$_POST['password'];
         $sql="select password from employee where name='$user'";
         $res=  mysqli_query($conn,$sql);
         
         if(mysqli_num_rows($res))
         {
             $x= mysqli_fetch_assoc($res);
             if($x['password']===$password)
             {
                 echo "You Have Successfully Loged In"."<br>";
                  echo 'wel-come'." "."$user";
             }
             else
             {
                 header("Location: logincheck.php");
             }
         }
         else 
               {
             
              header("Location: logincheck.php");
               }
        }
        }
        ?>
    </body>
</html>
