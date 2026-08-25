<?php

    // indexed array

    $peopleOne = ['shaun', 'crystal', 'ryu'];

    //echo $peopleOne[1]

    $peopleTwo = array('ken', 'chun-li');
    //echo $peopleTwo[1];

    $ages = [20, 30, 40, 50];
    //print_r($ages);


    $ages[1] = 25;
    //print_r($ages);


    $ages[] = 60;
    //print_r($ages);

    array_push($ages, 70);
    //print_r($ages);

    //echo count($ages);

    $peopleThree = array_merge($peopleOne, $peopleTwo);
    //print_r($peopleThree);

    // associative array (key & value pairs)
   
    $ninjaOne = ['shaun' => 'black', 'mario' => 'orange', 'luigi' => 'brown'];
    //echo $ninjaOne['mario'];
    //print_r($ninjaOne);

    $ninjaTwo = array('bowser' => 'green', 'peach' => 'yellow', 'toad' => 'pink');
    //print_r($ninjaTwo);

    $ninjaTwo['peach'] = 'pink';
    //print_r($ninjaTwo);

    //echo count($ninjaOne);

    $ninjaThree = array_merge($ninjaOne, $ninjaTwo);
    print_r($ninjaThree);



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

a way to store multiple value in a single variable

3 types of array

index
associative
multidimensional

>>index
$peopleOne[1] = 1 is the position of the word in the variable

multiple way to make array we can do:
-['bla bla', 'bla bla'];
-array('bla bla', 'bla bla')

array can be numbers or letters
array can only display a string

function

ptint_r = print a readable (to display the whole array)


how to overwrite the array:  
$ages[1] = 25;
print_r($ages);


if $ages[] = 60; means it'll put at the end of the array because we didn't position which number to take over

Function
array_push =  push the value onto the array at the end

count is to see how many value in the array

array_merge = to merge two arrays together



..associative

use keys instead of index (keys and value)
=> an arrow so it'll show the value, put it in the array

print out a value by using [ and put in the key like 'mario']
prinr a readable version we do  print_r

add a new value (make a new key name)
['toad'] = pink

we can also overwrite it
['peach'] = pink