<?php

    // comparisons boolean (true or false)
    //echo true; "1"
    //echo false; ""

    //numbers
    //echo 5 < 10;
    //echo 5 > 10;
    //echo 5 == 10;
    //echo 10 == 10;
    //echo 5 != 10;
    //echo 5 <= 5;
    //echo 5 >=5;

    // strings
    //echo 'shaun' < 'yoshi';
    //echo 'shaun' > 'yoshi';
    //uppercase is lesser than lowercase
    //echo 'shaun' > 'Shaun';
    //echo 'mario' == 'mario';
    //echo 'mario' == 'Mario';


   // loose vs strict equal comparisons

   //echo 5 == '5'; (loose)
   //echo 5 === '5'; (stict)
   //echo 5 === 5;

   //echo true == "1";
   echo false == "";

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

>>boolean & comparison (true & false)

why we don't see true/false as their word? 
because in the browser it only display strings, php when see boolean it converts it into strings.
true = 1
false = ""

= (assignment operator)
== (comparing if its equal to one another (loose comparison))
!= (not equal)

strings (takes the first letter and compare which is first in the alphabet)

uppercase is lesser than lowercase

>>loose vs strict equal comparison

loose comparison: == (doesn't consider the data type, so it's still true)
strict comparison: === (take to acount the type of data, so its false cause one is integer, one is a string)

true == "1" , false == "" , (its true cause its a loose comparison)