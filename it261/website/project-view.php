<?php
// people-view page

include('./includes/config.php');

// get set 

if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location:project.php');
}

// select from the table

$sql = 'SELECT * FROM project WHERE project_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, 
DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError
(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
$character_name = stripcslashes($row['character_name']);
$nickname = stripcslashes($row['nickname']);
$blurb = stripcslashes($row['blurb']);
$details = stripcslashes($row['details']);
$feedback = '';


} // close while

} else {  // end if statement
$feedback = 'There is a problem!';

} // end else
?>

<div id="wrapper">
    <main>
        <h1>Welcome to My Project Page</h1>
        <h2>Introducing you to <?php echo $character_name;?>'s Page</h2>
    <ul>
    <?php
        echo '
        <li><b>Character Name:</b>'.$character_name.'</li>
        <li><b>Nickname Name:</b>'.$nickname.'</li>
        <li>
        <p>'.$details.'</p>
        </li>
        ';
    ?>
    </ul>
    <p><a href="project.php">Return to Project Page</a></p>
    
    </main>
    <aside>
        <h3>This is my Aside</h3>
        <figure>
        <img src="./images/project<?php echo $id ;?>.jpg" alt="
        <?php echo $character_name;?>">
        <figcaption>
        <?php
        echo '
        '.$character_name.', '.$nickname.'
        ';
        ?>
        </figcaption>
        </figure>
        <p><i><?php  
        echo $blurb;
        ?></i></p>
    </aside>

<?php
// release the server

@mysqli_free_result($result);

// close the connection

@mysqli_close($iConn);
?>
</div>
<!--- end wrapper --->

<?php
include('./includes/footer.php');