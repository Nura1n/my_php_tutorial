<?php

// functions

function sayHello($name = 'shaun', $time = 'morning')
{
    echo "good $time $name";
}

//sayHello('mario');
sayHello('yosi', 'night');

function formatProduct($product)
{
    //echo "{$product['name']} costs {$product['price']} to buy <br />";
    return "{$product['name']} costs {$product['price']} to buy <br />";
}

//$formatted = formatProduct(['name'=> 'gold star','price'=> 20]);
//echo $formatted;

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

blocks of code that can be executed to do something

input >> function (process) >> output

its build in but we can also make a functon ourselves

use the keyword function >> that means we're creating a function

function SayHello(){
echo "good morning yoshi";
}

it will appear in the browser once we call on the function by saying the funcyion name: SayHello

when outputting variables in string, if we're using [] square brackets to get a property from a value it won't understand so we must put curly braces {}

return = the value back and stored in anotehr variable.

if want to accept another parameter, must use comma