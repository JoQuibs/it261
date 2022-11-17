<?php 
include('config.php');
include('./includes/header.php'); ?>

<div id="wrapper">
        
<h1>Welcome to our Daily Page!</h1>

<main>
<h1>Welcome to our Daily Page!</h1>
    <?php
        echo $coffee;
    ?>
    <?php echo $content; ?>
    </p>

    <ul>
        <li><a style="color:<?php
            if($today == 'Sunday') {
                echo 'Yellow';
            } else {
                echo 'blue';
            } ; ?>" href="daily.php?today=Sunday">Sunday</a></li>
        
        <li><a style="color:<?php
            if($today == 'Monday') {
                echo 'Brown';
            } else {
                echo 'blue';
            } ; ?>" href="daily.php?today=Monday">Monday</a></li>
        
        <li><a style="color:<?php
            if($today == 'Tuesday') {
                echo 'Green';
            } else {
                echo 'blue';
            } ; ?>" href="daily.php?today=Tuesday">Tuesday</a></li>
        
        <li><a style="color:<?php
            if($today == 'Wednesday') {
                echo 'Pink';
            } else {
                echo 'blue';
            } ; ?>" href="daily.php?today=Wednesday">Wednesday</a></li>
        
        <li><a style="color:<?php
            if($today == 'Thursday') {
                echo 'Orange';
            } else {
                echo 'blue';
            } ; ?>" href="daily.php?today=Thursday">Thursday</a></li>
        
        <li><a style="color:<?php
            if($today == 'Friday') {
                echo 'Red';
            } else {
                echo 'blue';
            } ; ?>" href="daily.php?today=Friday">Friday</a></li>
        
        <li><a style="color:<?php
            if($today == 'Saturday') {
                echo 'Purple';
            } else {
                echo 'blue';
            } ; ?>" href="daily.php?today=Saturday">Saturday</a></li>

    </ul>
</main>

<aside>
    <h3>Check out My Daily Favorites!</h3>
    <img src="./images/<?php echo $pic;?>" alt="<?php echo $alt; ?>">
   
</aside>


</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php'); 