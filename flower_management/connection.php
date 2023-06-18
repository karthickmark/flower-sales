<?php 
$servername = "localhost";
$UserName = "root";
$PassWord = "";
$db_name = "markz";
$conn = mysqli_connect($servername, $UserName, $PassWord, $db_name);
if(!$conn){
    die("<script>alert('connetion failed')</script>");
}


?>