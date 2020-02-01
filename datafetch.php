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
                $user=mysqli_real_escape_string($conn,$user);
                $sql="select * from students where name='$user'";
                $res=  mysqli_query($conn,$sql);
                $x=  mysqli_fetch_assoc($res);
                if($x)
                {
                echo "Address of $user is ".$x['address'];
                }
 else
     {
                    echo 'Please Enter a Real User';
 }
        }
        }
        ?>
        <form action="datafetch.php" method="POST">
            <input type="text" name="name" placeholder="Enter Name Here" />
            <input type="submit" value="SUBMIT" name="submit" />
        </form>
    </body>
</html>
