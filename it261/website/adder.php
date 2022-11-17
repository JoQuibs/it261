<!DOCTYPE html>
<html lang="en"> <!-- i have moved the html to the top and brought the php to the bottom-->
<head>
    <meta charset="UTF-8"> <!-- added meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Adder Assignment</title> 
<!--added styles-->
<style> 
form{
    max-width:400px;
    margin: 0 auto 10px auto;
}

label {
    display: block;
    margin-bottom: 5px;
}

input{
    width: 100%;
    display: block;
    margin-bottom: 10px;
    height: 30px;
}

input[type=submit] {
    width: auto;
}

fieldset{
    border: 1px solid #800;
    padding: 10px;
}
h1 {
    text-align: center;
    margin: 20px 0;
}
h2{
    text-align: center;
    margin-bottom: 10px;
}
p {
    text-align: center;
}

.error{
    color:red;
    font-style: italic;
    font-size: .9em;
    margin-top: 15px;
}
.box {
    width: 400px;
    border: 1px solid green;
    margin: 20px auto;
    padding: 10px;
}

</style>
</head>
<body>
<h1>Adder.php</h1>
 <form action="" method ="post"> <!-- removed the / on formaction and added method -->
<fieldset> <!-- added fieldset -->

 <!-- fixed the label open and close tags, also arranged the placement of the sentence -->
<label>Enter the first number:</label>
    <input type="text" name="num1">
<br>
<label>Enter the second number:</label>
<input type="text" name="num2">
<br>
<input type="submit" value="Add Em!!">

</fieldset>
</form>
<p><a href="">Reset page</a></p> <!-- moved this to html from php, and fixed the closing tag and semi-colon -->




<?php     //adder-wrong.php
//added this:
if (isset($_POST['num1'],
$_POST['num1'],
$_POST['num2'])) {

    //added if statement
if(empty($_POST['num1'] &&
$_POST['num2'] )) {
    echo '<p class="error">Please fill out all of the fields</p>';
} else {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2; //removed the minus sign 

}
echo '
<div class="box">
    <h2> You added '.$num1.' and '.$num2.'</h2>
    <p>and the answer is: '.$myTotal.'</p> 
</div>
    ';


//corrected the error of lacking dot and quote and closing tag for h2
//corrected the error from $myTotal." into '.$myTotal.' and added closing tags and semi colon
//added div tag
// line 99 fixed the .total into .myTotal
// also added closing tag for php
// encountering the errors, i had to double check the spelling and capitalization of each value.
// I have also needed to scroll for the right placement of closing tags and also the right quotations and periods
}
?> 
</body>
</html> <!-- brought down closing tags -->

