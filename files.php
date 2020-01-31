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
            $image=$_FILES['image'];
            
            echo "File Name is ".$image['name']."<br>";
            echo "File Size is ".$image['size']."<br>";
            echo "Temp Dir is ".$image['tmp_name']."<br>";
            echo "File Type is ".$image['type']."<br>";
            move_uploaded_file($image['tmp_name'],"img/".$image['name']);
        }
        ?>
    </body>
</html>
