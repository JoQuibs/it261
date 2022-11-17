<?php

//$variable = 'This is our variable';
//if(isset($variable)) {
 //   echo 'Variable has been set';
//} else 
 //   echo 'Variable has not been set';

//echo '<br>';

//if (isset($_GETp['today'])) {
 //   echo 'Today has been set';
//} else {
 //   echo 'NOT!!';
//}

if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l');
}

switch($today) {
    case 'Friday' :
        $coffee = '<h2>Friday is Iced Caramel Macchiato Day!</h2>';
        $pic = 'caramel.jpg';
        $alt = 'Caramel Macchiato';
        $content = '<p>We combine our rich, full-bodied espresso with vanilla-flavored syrup, milk and ice, 
        sthen top it off with a caramel drizzle for an oh-so-sweet finish.</p>';
    break;

    case 'Saturday' :
        $coffee = '<h2>Saturday is Java Chip Day!</h2>';
        $pic = 'j_chip.jpg';
        $alt = 'Java Chip';
        $content = '<p>We blend mocha sauce and Frappuccino® chips with coffee, milk and ice, 
        then top it off with whipped cream and a mocha drizzle to bring you endless java joy.</p>';
    break;

    case 'Sunday' :
        $coffee = '<h2>Sunday is Cappuccino Day!</h2>';
        $pic = 'cap.jpg';
        $alt = 'Cappuccino';
        $content = '<p>A cappuccino is an Italian coffee drink that is traditionally prepared with equal parts double espresso, 
        steamed milk, and steamed milk foam on top. Cream may be used instead of milk. It is typically smaller in volume than a latte, 
        and has a thicker layer of microfoam. Espresso is typically made with dark roast coffee and ground finely.</p>';
    break;

    case 'Monday' :
        $coffee = '<h2>Monday is Chai Tea Latte Day!</h2>';
        $pic = 'chai.jpg';
        $alt = 'Chai Tea Latte';
        $content = '<p>Black tea infused with cinnamon, clove and other warming spices is combined with steamed milk and 
        topped with foam for the perfect balance of sweet and spicy. An iconic chai cup.</p>';
    break;

    case 'Tuesday' :
        $coffee = '<h2>Tuesday is Strawberry Frappuccino Day!</h2>';
        $pic = 'sb.jpg';
        $alt = 'Strawberry Creme Frappuccino';
        $content = '<p>Summer favorite berry is the star of this delicious Frappuccino Blended Beverage—a blend of ice, 
        milk and strawberry puree layered on top of a splash of strawberry puree and finished with vanilla whipped cream.</p>';
    break;

    case 'Wednesday' :
        $coffee = '<h2>Wednesday is Coffee Jelly Day!</h2>';
        $pic = 'c_jelly.jpg';
        $alt = 'Coffee Jelly';
        $content = '<p>A marvel of three delicious layers innovative coffee jelly, creamy caramel Frappuccino blended with milk, 
        coffee and ice finished with a fluffy cloud of whipped cream topped with caramel drizzle.</p>';
    break;

    case 'Thursday' :
        $coffee = '<h2>Thursday is Hazelnut Latte Day!</h2>';
        $pic = 'hazelnut.jpg';
        $alt = 'Hazelnut Latte';
        $content = '<p>Extra-smooth Starbucks Blonde® Espresso and milk—flavoured with hazelnut syrup and then poured over ice—creates 
        an ideal cup for those who love a lighter-roasted coffee.</p>';
    break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
    }
    #wrapper {
        width: 940px;
        margin:20px auto;
    }
    h1, h2, img {
        margin-bottom:10px;
    }
    img{
        height: 500px;
        width: 400px;
    }
    p{
        margin-bottom:20px;
    }

    </style>
<!-- end style -->

</head>
<body>
    <div id="wrapper">
    <h1>My Awesome Switch Classwork Exercise (Not daily homework)</h1>
    <?php
        echo $coffee;
    ?>
    <img src="./images/<?php echo $pic;?>" alt="<?php echo $alt; ?>">
    <?php echo $content; ?>

    <h2>Check out our Daily Specials</h2>
    <ul>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
    </ul>

</div>
<!-- end wrapper -->
</body>
</html>