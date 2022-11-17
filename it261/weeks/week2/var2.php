<?php

$name = 'Jomar';
$first_name = 'Jomar';
$last_name = 'Quiban';
echo '<br>';
$name = 'Jomar';
$name .= ' Quiban';
echo $name;

echo '<br>';

$color = 'black';
echo $color;

echo '<br>';
echo 'Jomar\'s favorite color is' .$color.' ';

echo '<br>';
$x = 15;
$y = 15;
$z = $x + $y;
echo $z;

echo '<br>';
$x = 15;
$x += 5;
echo $x;
echo '<br>';
$x = 200;
$x /= 20;
echo $x;
echo '<br>';
echo '<h3>Our product, quantity and tax exercise</h3>';
$product = 50;
$quantity = 10;
$total = $product * $quantity;
$total *= 1.05;
echo $total;
echo  '<h3>We would like our amount to reflect 2 decimal places -- we are thinking about floats
and a new function - number_format()</h3>';

$product = 100;
$quantity = 10;
$total = $product * $quantity;
$total *= 1.105;
$total_friendly = number_format($total, 5);
echo 'We have a total of <b>$' .$total_friendly.'</b> dollars';
echo '<h3>Our second preset function is our date function</h3>';
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';
echo date("l jS \of F Y h:i:s A");

echo '<br>';
echo date("l jS\of F Y h:i A");
echo '<br>';
date_default_timezone_set('America/Seattle');
echo '<br>';
echo date("l jS\of F Y h:i A");

echo '<h3>Time for an array!</h3>';
echo '<h4>Below is an indexed array</h4>';

$fruit[] = 'bananas';
$fruit[] = 'mangoes';
$fruit[] = 'apples';
$fruit[] = 'oranges';
$fruit[] = 'cherries';
$fruit[] = 'melons';

echo $fruit;
echo '<br>';
echo $fruit[2];

$fruit = array(
    'bananas',
    'mangoes',
    'apples',
    'oranges',
    'cherries',
    'melons',
);

$fruit = [
    'bananas',
    'mangoes',
    'apples',
    'oranges',
    'cherries',
    'melons',
];

echo '<br>';
print_r($fruit);
echo '<br>';
var_dump($fruit);

echo '<h3>Now we have an associative array</h3>';

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

echo '<pre>';
var_dump($nav);
echo '</pre>';