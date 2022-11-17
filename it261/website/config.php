<?php 
ob_start();

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our Website Project';
        $body = 'home';
        break;

    case 'about.php':
        $title = 'About page of our Website Project';
        $body = 'about inner';
        break;

    case 'daily.php':
        $title = 'Daily page of our Website Project';
        $body = 'daily inner';
        break;

    case 'project.php':
        $title = 'Project page of our Website Project';
        $body = 'project';
        break;

    case 'contact.php':
        $title = 'Contact page of our Website Project';
        $body = 'contact';
        break;

    case 'gallery.php':
        $title = 'Gallery page of our Website Project';
        $body = 'gallery';
        break;
}
//our navigational array!

$nav = array (
    'index.php' => 'Home',
     'about.php' => 'About',
      'daily.php' => 'Daily',
       'project.php' => 'Project',
        'contact.php' => 'Contact',
         'gallery.php' => 'Gallery',
);

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
        $my_return .= '<li><a class="current" href="'.$key.' "> 
        '.$value.'</a></li>';
        } else {
        $my_return .= '<li><a href=" '.$key.' "> 
        '.$value.'</a></li>';
        }
    } //end foreach
        return $my_return;
} // end function

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

// my form's php

$first_name ='';
$last_name ='';
$email ='';
$phone ='';
$sports ='';
$gender_ ='';
$comments ='';
$privacy ='';
$regions ='';
$first_name_err ='';
$last_name_err ='';
$email_err ='';
$phone_err ='';
$sports_err ='';
$gender_err ='';
$comments_err ='';
$privacy_err ='';
$regions_err ='';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['first_name'])) {
$first_name_err = 'Please fill out your first name';
} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])) {
$last_name_err = 'Please fill out your last name';
} else {
    $last_name = $_POST['last_name'];
}

if(empty($_POST['email'])) {
$email_err = 'Please fill out your email';
} else {
     $email= $_POST['email'];
}

if(empty($_POST['gender'])) {
$gender_err = 'Please choose your gender';
} else {
     $gender = $_POST['gender'];
}

if(empty($_POST['phone'])) {
$phone_err = 'Please fill out your phone number';
} else {
    $phone = $_POST['phone'];
}

if(empty($_POST['sports'])) {
$sports_err = 'What, no sports?';
} else {
    $sports = $_POST['sports'];
}

if(empty($_POST['comments'])) {
$comments_err = 'Please share your thoughts with us';
} else {
    $comments = $_POST['comments'];
}

if(empty($_POST['privacy'])) {
$privacy_err = 'Please agree to our privacy policy';
} else {
    $privacy = $_POST['privacy'];
}

if($_POST['regions'] == NULL) {
$regions_err = 'Please select your region';
} else {
    $regions = $_POST['regions'];
}

//wines function
function my_sports($sports) {
$my_return = '';

    if(!empty($_POST['sports'])) {
        $my_return = implode(', ', $_POST['sports']);
    } else {
        $sports_err = 'Please fill out your sports';
    }
    return $my_return;
} //end function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['sports'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])) {


$to = ' szemeo@mystudentswa.com';
$subject = 'Test Email on' .date('m/d/y, h i A');
$body = '
First Name : '.$first_name.' '.PHP_EOL.'
Last Name : '.$last_name.' '.PHP_EOL.'
Email : '.$email.' '.PHP_EOL.'
Gender : '.$gender.' '.PHP_EOL.'
Phone : '.$phone.' '.PHP_EOL.'
Region : '.$regions.' '.PHP_EOL.'
Sports : '.my_sports($sports).' '.PHP_EOL.'
Comments : '.$comments.' '.PHP_EOL.'
';

$headers = array(
    'From' => 'noreply@mystudentswa.com'
);

if(!empty($first_name && 
$last_name && 
$email && 
$gender && 
$phone && 
$regions && 
$sports && 
$comments)) {

mail($to, $subject, $body, $headers);
header('Location:thx.php');

}

} // end isset

} // end server request method