<?php 
include('config.php');
include('./includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        table{
            border:1px solid red;
            border-collapse:collapse;
        }
        img{
            max-width: 50%;
        }
    </style>
</head>
<div id="wrapper">
    <main>
    <h2>Welcome to our Gallery</h2>
    <table>
        <tr>
            <td><img src="images/me.png" alt="Jomar_Quiban"></td>
            <td>My Picture</td>
            <td>Formal Pic</td>
        </tr>
        <tr>
            <td><img src="images/modern.jpg" alt="Modern_House"></td>
            <td>My Dream House</td>
            <td>Modern House</td>
        </tr>
        <tr>
            <td><img src="images/drone.jpg" alt="Drone"></td>
            <td>My Dream Career</td>
            <td>U.S Airforce RPA Pilot</td>
        </tr>
        <tr>
            <td><img src="images/gaming.jpg" alt="Gaming_Set"></td>
            <td>My Gaming Set</td>
            <td>Modern Gaming Room</td>
        </tr>
        <tr>
            <td><img src="images/gym.jpg" alt="Gym"></td>
            <td>My Hobby</td>
            <td>Gym</td>
        </tr>
    </table>
    </main>
<body>
<table>
<tr>
<td><img src="images/<?php echo substr($image, 0, 5)    ;?>.jpg" alt="<?php echo $name;?>"></td>
<td><?php echo str_replace('_',' ', $name) ;?></td>
<td></td>
</tr>
</table>
</body>
</html>

<?php
include('./includes/footer.php'); 