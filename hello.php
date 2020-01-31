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
        if(isset($_POST['submit']))
        {
            $user="kanak";
            $pass="12345";
            if($user===$_POST['user']&&$pass===$_POST['password'])
            {
               echo "<h1>WEL_COME</h1>"; 
            }
 else 
 {
     header("Location:LOGIN.html");
 }
        }
 else 
     {
     header("Location:123.php");
 }
        ?>
    </body>
</html>
