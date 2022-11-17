<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styles.css" type="text/css" rel="stylesheet">
    <title>Travel Calculator</title>
</head>
<body>
<form action="<?php echo htmlspecialchars 
($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label>NAME</label>
<input type="text" name="name" value="<?php if
(isset($_POST['name'])) echo htmlspecialchars ($_POST['name']) ;?>">

<label>Total miles driving?</label>
<input type="number" name="miles" value="<?php if
(isset($_POST['miles'])) echo htmlspecialchars ($_POST['miles']) ;?>">

<label>How fast do you drive?</label>
<input type="number" name="speed" value="<?php if
(isset($_POST['speed'])) echo htmlspecialchars ($_POST['speed']) ;?>">

<label>How many hours per day do you plan on driving?</label>
<input type="number" name="hour" value="<?php if
(isset($_POST['hour'])) echo htmlspecialchars ($_POST['hour']) ;?>">

<!--radio button -->
<label>Price of Gas</label>
<ul>
<li><input type="radio" name="gas" value="3.00" <?php if
(isset($_POST['gas']) && $_POST['gas'] == 3.00) echo 'checked="checked"';?>> $3.00 </li>
<li><input type="radio" name="gas" value="3.50" <?php if
(isset($_POST['gas']) && $_POST['gas'] == 3.50) echo 'checked="checked"';?>> $3.50 </li>
<li><input type="radio" name="gas" value="4.00" <?php if
(isset($_POST['gas']) && $_POST['gas'] == 4.00) echo 'checked="checked"';?>> $4.00 </li>




</ul>

<label>Fuel Efficiency</label>
<select name="fuel">
<option value="" NULL <?php if(isset($_POST['fuel']) && $_POST['fuel'] == NULL)
echo 'selected="unselected"';?>>Select one!</option>
<option value="40.00" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 40.00)
echo 'selected="selected"';?>>Great @ 40 mpg</option>
<option value="10.00" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == 10.00)
echo 'selected="selected"';?>>Terrible @ 10 mpg</option>

</select>

<input type="submit" value="Calculate">

<p><a href="">Reset</a></p>

</fieldset>
</form>




<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])) {
    echo '<p class="error">Please fill out your name!</p>';
}

if(empty($_POST['miles'])) {
    echo '<p class="error">Please fill your total driving miles!</p>';
}

if(empty($_POST['speed'])) {
    echo '<p class="error">Please fill out how fast you be driving!</p>';
}

if(empty($_POST['hour'])) {
    echo '<p class="error">How many hours per day would you drive?</p>';
}

if(empty($_POST['gas'])) {
    echo '<p class="error">Your cost of gas, please</p>';
}

if($_POST['fuel'] == NULL) {
    echo '<p class="error">Please select fuel efficiency!</p>';
}

 if (isset($_POST['name'],
$_POST['miles'],
$_POST['speed'],
$_POST['hour'],
$_POST['gas'],
$_POST['fuel'])) {
$name = $_POST['name'];
$miles = floatval($_POST['miles']);
$speed = floatval($_POST['speed']);
$hour = floatval($_POST['hour']);
$gas =floatval($_POST['gas']);
$fuel = floatval($_POST['fuel']);
//computation
$hours = $miles / $speed;
$days = $hours / $hour;
$gallons = $miles / $fuel;
$dollars = $gallons * $s;

if(!empty($name && $miles && $speed && $hour && $gas && $fuel)) {



echo '
<div class="box">
<h2>Hello '.$name.', </h2>
<p>You will be travelling a total of '.number_format($hours, 2).' hours, taking
'.number_format($days, 2).' days, and you will be using '.$gallons.' gallons costing you
$'.number_format($dollars, 2).' dollars.</p>


</div>
';

}

}


    
} //end server request



?>
</body>
</html>