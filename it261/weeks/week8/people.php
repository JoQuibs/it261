<?php
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">
<main>
    <h1>Welcome to People Database Class Exercise</h1>
<?php
$sql = 'SELECT * FROM people';
// now, connect to database

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 
DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError
(__FILE__,__LINE__,mysqli_error($iConn)));

// we will ask if number of rows are greater than 0

if(mysqli_num_rows($result) > 0) {
    //while loop
    while($row = mysqli_fetch_assoc($result)) {
        echo '
        <h2>Information about '.$row['first_name'].'</h2>       
        <ul>
        <li><b>First Name:</b>'.$row['first_name'].'</li>
        <li><b>Last Name:</b>'.$row['last_name'].'</li>
        <li><b>Birthday:</b>'.$row['birthdate'].'</li>
        </ul>
        <p>For more information about '.$row['birthdate'].', 
        click <a href="people-view.php?id='.$row['people_id'].' ">here</a></p>
        ';


    } //end while


} else { // end of number of row is greater than 0

    echo 'Nobody is home!';
} 

// release the server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);
?>

</main>
<aside>
<h3>I will display my random images here!</h3>
</aside>
</div>
<!--- end rapper --->

<?php
include('./includes/footer.php');