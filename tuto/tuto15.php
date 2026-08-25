<?php

    //include('tuto11.php');
    //require('tuto11.php');

    //include 'ninja.php';
    //require 'ninja.php';
   // echo 'end of php';
    

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials</title>
</head>
<body>

    <?php include 'content.php'; ?>
    <?php include 'content.php'; ?>
    <?php include 'content.php'; ?>

</body>
</html>

//nota 

include = is to include a file coding to another file very helpfull for header and footer 

require = the same thing

differences in error 

include error but can still see the echo of a code

require, error and will ignore the code

example we put something in a file to echo it, we can do it three times by including that file 3 times 
then when we want to edit the texxt we edit it just at the ori file and it will automaticlly update the three.