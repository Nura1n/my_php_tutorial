<?php

// conditional statements

$price = 20;

    //if($price < 10){
        //echo 'the condition is met';
    //} elseif ( $price < 30){
        //echo 'elseif condition met';
    //} else {
        //echo 'the condition is not met';
     //}
   $products = [
        ['name'=> 'shiny star','price' => 20],
        ['name'=> 'green shell','price'=> 10],
        ['name'=> 'red shell','price'=> 15],
        ['name'=> 'gold coin','price'=> 5],
        ['name'=> 'lightning bolt','price'=> 40],
        ['name'=> 'banana skin','price'=> 2]
    ];

    foreach ($products as $product){

        //if($product['price'] < 15 && $product['price'] > 2){
        //    echo $product['name'] . '<br />';
        //}

        //if($product['price'] > 20 || $product['price'] < 10){
        //echo $product['name'] . '<br />';
        //}
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Tutorials</title>
</head>
<body>

    <div>
        <ul>
            <?php foreach ($products as $product) { ?>
                <?php if ($product['price'] > 15) { ?>
                    <li><?php echo $product['name']; ?></li>
                <?php } ?>
            <?php } ?>
        </ul>

</body>
</html>

//nota

check a certain condition if its true, than do thing but is it false do something else instead

if = conditional statement, if true a block of code will do something

else = if false this condition will run

else if = if false it'll move here and compare again, if true, condition met

&& = to check another condition (both needs to be true)
|| = or (only 1 have to be true)
