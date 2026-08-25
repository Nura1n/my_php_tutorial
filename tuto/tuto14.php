<?php

// variable scope

//local vars

function myFunc()
{
    $price = 10;
    echo $price;
}

//myFunc();
//echo $price;

function myFuncTwo($age)
{
    echo $age;
}

//myFuncTwo(25);
//echo $age;

// global variables

$name = 'mario';

//function sayHello(){
//    global $name;
//   $name = 'yoshi';
//    echo "hello $name";
//}

//sayHello();
//echo $name;

function sayBye(&$name)
{
    $name = 'wario';
    echo "bye $name";
}

sayBye($name);
echo $name;

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>



</body>

</html>

//nota

local scope
>> you can only use it inside the function
>> if we declare a variable inside the function, it must be only in the function

Global scope
>> if we declare the variable outside the fuction, there will be an error
>> becausee the function trying to find the local variavble
>> what to do?
>> declare the $name in theh function as global $name