<?php
	session_start();
?>
<html>
	<head>
		<title>
			Welcome to Blu Airlines
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
		<link rel="stylesheet" href="css1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="header.css">
		<style>
        body,h1,h2,h3,h4,h5,h6 {font-family: 'Montserrat', sans-serif;}
        .myLink {display: none}

		
		img.center {
			display: flex;
           align-items:center;
}

        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

    </style>
    <script src="https://kit.fontawesome.com/e90b3f623b.js" crossorigin="anonymous"></script>
	</head>
	<body style="background-image: url('images/cloud.jpg');background-repeat: no-repeat; background-size: 1600px 2400px;background-position:bottom;">
		<div class="center">
	<img  src="images\air.jpg" width="80px" height="80px" /> 
		<h1 id="title" style="color:rgb(14, 118, 187);font-family:'Dancing Script', cursive;font-size: 65px;">
			Blu Airways
		</h1>
		</div>
		<div id="left_side">
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"book_tickets.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_ticket_message.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-ticket\" aria-hidden=\"true\"></i> Book Tickets</a>";
						}
					?>
				</li>
				<li><a href="index.html"><i class="fa fa-plane" aria-hidden="true"></i> FAQ</a></li>
				<li><a href="offers.html"><i class="fa fa-plane" aria-hidden="true"></i> Offers</a></li>
				<li><a href="home_page.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
				<li>
					<?php
						if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Customer')
						{
							echo "<a href=\"customer_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else if(isset($_SESSION['login_user'])&&$_SESSION['user_type']=='Administrator')
						{
							echo "<a href=\"admin_homepage.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
						else
						{
							echo "<a href=\"login_page.php\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> Login</a>";
						}
					?>
				</li>
			</ul>
		</div>
		<div class="container">
			       

<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px;height: 300px;">
 
 <div class="w3-display-middle" style="width:72%">
   <div class="w3-bar w3-black">
	 
	 <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Alerted');"><i class="fa-solid fa-bell"></i> Alerted</button>
	 <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Offer');"><i class="fa-solid fa-circle-exclamation w3-margin-right"></i>Offers</button>
   </div>

   <!-- Tabs -->
   

   <div id="Alerted" class="w3-container w3-white w3-padding-16 myLink">
	 <h3>Stay <text class="w3-text-blue">alerted</text> all the time. </h3>
	 <p>Book a flight with us and get alerts at crucial times.</p>
	 <p><button class="w3-button w3-dark-grey w3-red">Click to get alerts</button></p>
   </div>

   
   <div id="Offer" class="w3-container w3-white w3-padding-16 myLink">
	 <h3>Find Your Suitable Offer</h3>
	 <p><span class="w3-tag w3-blue">DISCOUNT!</span> Multiple Offers available for your convenience.</p>
	 <input class="w3-input w3-border" type="text" placeholder="Date of Departure">
	 <p><button class="w3-button w3-dark-grey">Search Offers</button></p>
   </div>
</div>




</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

 <!-- Good offers -->
 <div class="w3-container w3-margin-top">
   <h3>Good Offers Right Now</h3>
   <h6>Up to <strong>50%</strong> discount.</h6>
 </div>
 <div class="w3-row-padding w3-text-white w3-large">
   <div class="w3-half w3-margin-bottom">
	 <div class="w3-display-container">
	   <img src="https://www.w3schools.com/w3images/cinqueterre.jpg" alt="Cinque Terre" style="width:100%">
	   <span class="w3-display-bottomleft w3-padding">Cinque Terre</span>
	 </div>
   </div>
   <div class="w3-half">
	 <div class="w3-row-padding" style="margin:0 -16px">
	   <div class="w3-half w3-margin-bottom">
		 <div class="w3-display-container">
		   <img src="https://www.w3schools.com/w3images/newyork2.jpg" alt="New York" style="width:100%">
		   <span class="w3-display-bottomleft w3-padding">New York</span>
		 </div>
	   </div>
	   <div class="w3-half w3-margin-bottom">
		 <div class="w3-display-container">
		   <img src="https://www.w3schools.com/w3images/sanfran.jpg" alt="San Francisco" style="width:100%">
		   <span class="w3-display-bottomleft w3-padding">San Francisco</span>
		 </div>
	   </div>
	 </div>
	 <div class="w3-row-padding" style="margin:0 -16px">
	   <div class="w3-half w3-margin-bottom">
		 <div class="w3-display-container">
		   <img src="https://www.w3schools.com/w3images/pisa.jpg" alt="Pisa" style="width:100%">
		   <span class="w3-display-bottomleft w3-padding">Pisa</span>
		 </div>
	   </div>
	   <div class="w3-half w3-margin-bottom">
		 <div class="w3-display-container">
		   <img src="https://www.w3schools.com/w3images/paris.jpg" alt="Paris" style="width:100%">
		   <span class="w3-display-bottomleft w3-padding">Paris</span>
		 </div>
	   </div>
	 </div>
   </div>
 </div>

 <!-- Explore Nature -->
 <div class="w3-container">
   <h3>Explore India</h3>
   <p>Travel with us and see nature at its finest.</p>
 </div>
 <div class="w3-row-padding">
   <div class="w3-half w3-margin-bottom">
	 <img src="https://cdn.britannica.com/37/189837-050-F0AF383E/New-Delhi-India-War-Memorial-arch-Sir.jpg" alt="Delhi" style="width:100%" >
	 <div class="w3-container w3-white">
	   <h3>Delhi, India</h3>
	   <p class="w3-opacity">Roundtrip from 6000/-</p>
	   
	   <button class="w3-button w3-margin-bottom">Buy Tickets</button>
	 </div>
   </div>
   <div class="w3-half w3-margin-bottom">
	 <img src="https://thetravelhack.com/wp-content/uploads/2020/06/Kerala-backwaters.jpeg" alt="Austria" style="width:100%">
	 <div class="w3-container w3-white">
	   <h3>Kerala, India</h3>
	   <p class="w3-opacity">One-way from 3000/-</p>
	   
	   <button class="w3-button w3-margin-bottom">Buy Tickets</button>
	 </div>
   </div>
 </div>

 <!-- Newsletter -->
 <div class="w3-container">
   <div class="w3-panel w3-padding-16 w3-black w3-opacity w3-card w3-hover-opacity-off">
	 <h2>Get the best offers first!</h2>
	 <p>Join our newsletter.</p>
	 <label>E-mail</label>
	 <input class="w3-input w3-border" type="text" placeholder="Your Email address">
	 <button type="button" class="w3-button w3-blue w3-margin-top">Subscribe</button>
   </div>
 </div>
 
 <!-- Contact -->
 <div class="w3-container">
   <h2>Contact</h2>
   <p>Let us book your next trip!</p>
   <i class="fa fa-map-marker" style="width:30px"></i> Coimbatore, TN<br>
   <i class="fa fa-phone" style="width:30px"></i> Phone: +91 9876543210<br>
   <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
   <form action="/action_page.php" target="_blank">
	 <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
	 <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Email" required name="Email"></p>
	 <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" required name="Message"></p>
	 <p><button class="w3-button w3-blue w3-padding-large" type="submit">SEND MESSAGE</button></p>
   </form>
 </div>
 
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-center w3-opacity w3-margin-bottom">
 <h5>Find Us On</h5>
 <div class="w3-xlarge w3-padding-16">
   <i class="fa fa-facebook-official w3-hover-opacity"></i>
   <i class="fa fa-instagram w3-hover-opacity"></i>
   <i class="fa fa-snapchat w3-hover-opacity"></i>
   <i class="fa fa-pinterest-p w3-hover-opacity"></i>
   <i class="fa fa-twitter w3-hover-opacity"></i>
   <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
 <p>Developed by <a href="#" target="_blank" class="w3-hover-text-blue">CSE-F</a></p>
</footer>

<script>
// Tabs
function openLink(evt, linkName) {
 var i, x, tablinks;
 x = document.getElementsByClassName("myLink");
 for (i = 0; i < x.length; i++) {
   x[i].style.display = "none";
 }
 tablinks = document.getElementsByClassName("tablink");
 for (i = 0; i < x.length; i++) {
   tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
 }
 document.getElementById(linkName).style.display = "block";
 evt.currentTarget.className += " w3-blue";
}

// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>
		</div>
		<!--check out addling local host in links and other places

			shift login/logout buttons to right side
		-->
	</body>
</html>