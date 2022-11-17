<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title>Travel Calculator 1 php form</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="post">
<fieldset>
<label>NAME</label>
<input type="text" name="name">

<label>Total miles driving?</label>
<input type="number" name="miles">

<label>How fast do you drive?</label>
<input type="number" name="speed">

<label>How many hours per day do you plan on driving?</label>
<input type="number" name="hour">

<!--radio button -->
<label>Price of Gas</label>
<ul>
<li><input type="radio" name="gas" value="3.00"> $3.00 </li>
<li><input type="radio" name="gas" value="3.50"> $3.50</li>
<li><input type="radio" name="gas" value="4.00"> $4.00 </li>



</ul>
<input type="submit" value="Calculate">

<p><a href="">Reset</a></p>

</fieldset>
</form>




<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'] &&
$_POST['miles'] &&
$_POST['speed'] &&
$_POST['hour'] &&
$_POST['gas'])) {

echo '<p class="error">Please fill out all of the fields</p>';



} elseif (isset($_POST['name'],
$_POST['miles'],
$_POST['speed'],
$_POST['hour'],
$_POST['gas'])) {
$name = $_POST['name'];
$miles = $_POST['miles'];
$speed = $_POST['speed'];
$hour = $_POST['hour'];
$gas = $_POST['gas'];

echo '
<div class="box">
<h2>Hello '.$name.'</h2>
<p>You will be travelling a total of '.number_format($hours, 2).' hours, taking
'.number_format($days, 2).', and you will be using '.$gallons.' gallons costing you
'.number_format($dollars, 2).' dollars.</p>


</div>
';

}


    
} //end server request



?>
</body>
</html>