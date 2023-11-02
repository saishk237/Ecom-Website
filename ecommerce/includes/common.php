<!--establish the connection to database, and start the session-->
<?php
$con = mysqli_connect("65.2.132.9", "root", "", "store")or die($mysqli_error($con));
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>
