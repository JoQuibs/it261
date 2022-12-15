<?php

// index page, must show session_start()

session_start();

include('config.php');

// did the user login correctly

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');

}

include('./includes/header.php');
?>

<div id="hero">
<?php
$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0,4);

$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="./images/'.$selected_image.'" alt="'.$photos[$i].'">';
?>
</div>
<!-- end hero -->

<main>
    <h1>Welcome to our Web Programming Class!</h1>
    <h2>We are going to learn PHP!</h2>
    <p>Hi! My name is Jomar P. Quiban, I am a student of
            Seattle Central College and currently under the AAS-T
            Web Development program. Hopefully when I finish my 
            associate's degree I would like to continue my bachelor's degree
            while taking the U.S AirForce ROTC program. During my free time, I 
            usually workout at the gym and play sports such as basketball. I also
            play computer games if the weather is bad to go out and have fun. Coffee
            is my remedy for my stress and helpful for me studying.
    </p>
    <h2>Another Headline 2</h2>
    <p>Hi! My name is Jomar P. Quiban, I am a student of
            Seattle Central College and currently under the AAS-T
            Web Development program. Hopefully when I finish my 
            associate's degree I would like to continue my bachelor's degree
            while taking the U.S AirForce ROTC program. During my free time, I 
            usually workout at the gym and play sports such as basketball. I also
            play computer games if the weather is bad to go out and have fun. Coffee
            is my remedy for my stress and helpful for me studying.
    </p>
</main>

<aside>
    <h3>This is our headline three in our beautiful aside</h3>
    <p>Hi! My name is Jomar P. Quiban, I am a student of
            Seattle Central College and currently under the AAS-T
            Web Development program. Hopefully when I finish my 
            associate's degree I would like to continue my bachelor's degree
            while taking the U.S AirForce ROTC program. During my free time, I 
            usually workout at the gym and play sports such as basketball. I also
            play computer games if the weather is bad to go out and have fun. Coffee
            is my remedy for my stress and helpful for me studying.
    </p>
</aside>


</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php'); 