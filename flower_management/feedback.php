<?php 
include "connection.php";
if (isset($_POST['feedsubmit'])) {
   $satislevel = $_POST['view'];
   $feedcoment = $_POST['comments'];
   $feedname = $_POST['namefeed'];
   $feedmail = $_POST['emailfeed'];
   $feednumber = $_POST['numfeed'];

   $sqlfeed = "INSERT INTO feedz (satislevel, feedcoment, feedname, feedmail, feednum)
   VALUES ('$satislevel', '$feedcoment', '$feedname', '$feedmail', '$feednumber')";
   $feedy = mysqli_query($conn, $sqlfeed);
   if ($feedy) {
    echo "<script>window.alert('Feedback Submited Successfully');
            window.location.href = 'home.php';
        </script>";
        
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajalakshmi Flowers</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <style> h1,h3{
    text-align: center;
    color: goldenrod;
    padding:5px;
  }
  .conty{
    max-width: 1170px;
	margin:auto;
    background-color: rgb(255, 255, 255);
    border-radius: 5px;
    padding:20px;
}.selectlevel{
    display: flex;
    flex-direction: row;
    padding:3px 220px;
}.selectlevel li{
    padding:3px 50px;
    color:darkblue;
}h2{color:orangered; text-align: center;padding:5px;}
    textarea{
        height: 120px;
        width: 450px;
	 background: lavenderblush;
     color:black;
	 font-size: 0.85em;
     padding:20px;margin:5px 340px;}
     .feedinput{
        text-align: center;
        margin:3px 330px; 
     }h3 a{
    background: goldenrod;
    color:white;
    border-radius: 10px;
    font-size: 20px;
    padding: 10px;
    margin:10px;
}
.subbtn{
    border: none;
    background-color: transparent;
}
</style>
</head>
<body> 
    <?php include 'header.php'; ?>
<div class="conty">
    <h1 >Feedback Form</h1><br>

    <h2>Please help us to serve you better by taking a couple of minutes...</h2>
    <form action="" method="post">
        <h3>How satisfied were you with our Service?</h3><br>

        <ul class="selectlevel">
				 <li><input type="radio" name="view" value="excellent" required> 
				 	  Excellent
				 </li>
				 <li><input type="radio" name="view" value="good"> 
					 Good
				 </li>
				 <li><input type="radio" name="view" value="neutral">
					 Neutral
				 </li>
				 <li><input type="radio" name="view" value="poor" > 
					  Poor
				 </li>
			 </ul>	<br>
             <h2>please write a specific feedback,  about us...</h2><br>
             <textarea placeholder="comment about us..."  name="comments" required=""></textarea><br>
           <div class="feedinput">  <input type="text" placeholder="Your Name..." name="namefeed" required /><br><br>
			<input type="email" placeholder="Your Email..." name="emailfeed"required/><br><br>
			<input type="text" placeholder="Your Number..." name="numfeed" required /><br><br>
			<h3><a><input type="submit" class="subbtn" value="submit Feedback" name="feedsubmit" style="color:white;"/></a></h3></div>
    </form>
</div>
    <?php include 'footer.php'; ?>

</body>
</html>
