
    <html>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous">
	</script>
	<style>
		.subbtn{
    border: none;
    background-color: transparent;
}
.justtry{
	display: flex;
	flex-wrap:column;
	margin:0px 150px 0px -20px; 
	transition: all 0.3s ease;
}
.justtry a:hover{
	color: #000000;
	padding-right: 8px;}
	</style>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<body> 
        <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul>
  	 				<li class="justtry"><a href="about.php">about us</a></li>
  	 				<li class="justtry"><a href="part.php">Our Partners</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>info</h4>
  	 			<ul>
  	 				<li><a ><button class="subbtn" onclick="pay()">payment method</button></a></li>
  	 				<li><a href="feedback.php">customer feedback</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
					
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>

<script>function pay(){
		alert("ONLY CASH ON PAY AVAILABLE");
	}</script>
  
    
</body>
</html>