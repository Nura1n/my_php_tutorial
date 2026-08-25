<?php

$stringOne = 'my email is ';
$stringTwo = 'mario123@thenetninja.co.uk';

//echo $stringOne . $stringTwo;

$name = 'mario';

//echo 'Hey, my name is ' . $name;

//echo "Hey my name is $name"

//echo "the ninja screamed \"whaaaaaa\"";
//echo 'the ninja screamed "whaaaaaa"';

//echo $name[1];

//echo strlen($name);
//echo strtoupper($name);
//echo strtolower($name);
echo str_replace('m', 'w', $name);


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

string are contain in quotes, there is a diffference if we use single or double quoted
single quotes = can't key in variables
= it will just display the variable name
string concaternation = to combine 2 strings
= by using a dot (.)

using double quote = we can key in the variables in it

we escape the character so it won't close the string off
usage= if you want to write something like the ninja scream and then a dialogue like waaaaa, kinda like a book
we can use "the ninja scream \"waaaaaaa\""
or 'the ninja scream "waaaaaa'

how to get certain individual character out of a string
using square bracket, so put your variable name and then square bracket [], most programming language 0 is the first index

Function = code that do things for us
strlen (string length)
strtoupper (convert to uppercase)
strtolower (convert to lowercase)
str_replace (replace certain things, ex: want to replace all M with W)