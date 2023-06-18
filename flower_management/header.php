<?php 
include "useraccount.php";
?>

<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
    img{
        padding:0px;
        margin-left: 5px;
        border-radius: 3px;
    }
    .spn{
        color:black;
        text-transform: uppercase;
        background-color: white;
        padding:8px;
        border-radius: 50%;
    }.well{
        color: white;
    }marquee{

        color:white;
        background-color: gray;
        margin:2px 50px;
        border-radius: 3px;
    }
    .logo-img {
        background-image: url('./img/logo.png');
        height:60px; width:330px;
        background-repeat: no-repeat;
        background-size:cover;
    }

</style>
</head>
<body> 
    <div class=header>
        <nav class="navbar">
        <section class="logo-img"></section>
            <ul><li><span class="well">Welcome </span><span class="spn"><?php  echo ''.$login_session.'';  ?></span></li>
           <li> <a href="home.php" >Home</a></li>
           <li> <a href="listflower.php" >Flowers List</a></li>
           <li><a href="mycart.php" >My Cart</a></li>
           <li><a href="about.php" >About Us</a></li>
           <li> <a href="logout.php" >Logout</a></li>
            </ul>
        </nav>
        <marquee>Our website delivers fresh flowers to all of our customer...</marquee>
</div>
</body>
</html>