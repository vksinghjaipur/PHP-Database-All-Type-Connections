
<?php
$conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());//Database Connection

$db_select = mysqli_select_db($conn, 'db_vikash') or die(mysqli_error()); //Selection Database

?>