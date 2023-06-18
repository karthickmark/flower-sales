<?php
include('connection.php');
session_start();
$check=$_SESSION['username'];
$query="SELECT username from users where username='$check' ";
$session=mysqli_query($conn,$query);
$row=mysqli_fetch_array($session);
$login_session=$row['username'];
if(!isset($login_session))
{
echo "You Failed !!";
 header('Location: index.php');
}
?>