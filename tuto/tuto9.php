<?php

//loops

$ninjas = ['shaun', 'ryu', 'yoshi'];

//for ($i = 0; $i < count($ninjas); $i++){
//    echo $ninjas[$i] . '<br />';
//}

//foreach($ninjas as $ninja){
//    echo $ninja . '<br />';
//}

$products = [
    ['name' => 'shiny star', 'price' => 20],
    ['name' => 'green shell', 'price' => 10],
    ['name' => 'red shell', 'price' => 15],
    ['name' => 'gold coin', 'price' => 5],
    ['name' => 'lightning bolt', 'price' => 40],
    ['name' => 'banana skin', 'price' => 2]
];

//foreach ($products as $product){
//echo $product['name'].' - '.$product['price'];
//echo '<br />';
//}

//$i = 0;

//while ($i < count($products)){
//    echo $products[$i]['name'];
//    echo '<br />';
//    $i++;
//}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

    <h1>Products</h1>
    <ul>
        <?php foreach ($products as $product) { ?>
            <h3><?php echo $product['name']; ?></h3>
            <p>Price: <?php echo $product['price']; ?></p>
        <?php } ?>
    </ul>

</body>

</html>

//nota

common theme in every programming language
to execute a block of code a set numbers of times

why?
example we want to get a result after the 5 time, like to run something (5 times), we don;t have to write it 5 times, with loop we just write it once

$i variable responsible to how many time we initialize something, there for $i = 0

$i< 5=cycle through the loop

    $i ++ each time it loops, I want you to add 1, so when we run it the first time we add 1

    for ($i=0; $i < count($blogs); $i ++)
    we don't know how many blogs there is so we use this
    so as long as i is less than the count of blogs, we i is more or the same count as blog, it will stop

    foreach don't know the length of somethingg, the array $blogs we want to cycle over as an indivual blog

    while loop=to cycle throught a particular block of code while a certain condittion is true

    we can do looping through html as well