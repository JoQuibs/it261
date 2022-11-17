<?php

// $far = ($cel * 9/5) + 32;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
    <style>
*{
    padding:0;
    margin:0;
    box-sizing:border-box;
}

table {
    width:500px;
    margin:20px auto;
    border-collapse: collapse;
    border: 1px solid lightblue;
}
td, th {
    border: 1px solid lightblue;
    border-collapse: collapse;
    padding: 5px;
}
h1, h2 {
    text-align:center;
    margin: 10px 0;
    color: green;
}

        </style>
</head>
<body>
    <h1>My Celcius / Farenheit Table</h1>
<table>
<tr>
    <th>Celcius</th>
    <th>Farenheit</th>
</tr>
<?php
for($cel = 0; $cel <= 100; $cel += 2) {
    $far = ($cel * 9/5) + 32;
    echo '<tr>';
    echo '<td> '.$cel.' degrees </td>';
    echo '<td> '.$far.' degrees </td>';
    echo '</tr>';
}
?>

<table>
    
<h2>You will now complete a kilometer/mileage table on your own!</h2>
<tr>
    <th>Kilometer</th>
    <th>Mileage</th>
</tr>
<?php
for($kilometer = 1; $kilometer <= 100; $kilometer += 1) {
    $mileage = ($kilometer * 1.609);
    echo '<tr>';
    echo '<td> '.$kilometer.' km </td>';
    echo '<td> '.$mileage.' miles </td>';
    echo '</tr>';
}
?>
</body>
</html>