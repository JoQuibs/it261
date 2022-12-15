<?php
// our config file
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

include('credentials.php');

$success = 'You have successfully logged on';
$errors = array();

switch(THIS_PAGE) {
    case 'final.php':
        $title = 'Home page of our Final Project';
        $body = 'home';
        break;

    case 'about.php':
        $title = 'About page of our Final Project';
        $body = 'about inner';
        break;

    case 'index.php':
        $title = 'Front Page of our Final Project';
        $body = 'front';
        break;

    case 'contact.php':
        $title = 'Contact page of our Final Project';
        $body = 'contact';
        break;

    case 'shop.php':
        $title = 'Shopping page of our Final Project';
        $body = 'shop';
        break;

    case 'login.php':
        $title = 'Login page of our Final Project';
        $body = 'shop';
        break;

    case 'register.php':
        $title = 'Register page of our Final Project';
        $body = 'shop';
        break;
}
//our navigational array!

$nav = array (
    'final.php' => 'Home',
     'about.php' => 'About',
        'contact.php' => 'Contact',
         'shop.php' => 'Shop',
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

 // display error function
function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
} // end display error function

// on Hostgator, you may have to use a different value for your host