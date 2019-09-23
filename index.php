<!DOCTYPE html>
<html>
	<?php
		$jsondata = file_get_contents("articles.json");
		$json = json_decode($jsondata,true);
		$link = 1;
		$link = $_GET['link'];
		echo($link);

		$linkAddress=$json['articles'][$link-1]["videoSuffix"];
	?>

	<title>W3.CSS Template</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	html, body, h1, h2, h3, h4, h5 {font-family: "Open Sans", sans-serif}
	</style>

	<script>	
		function offerApp() {
		alert("Want to get personalized news stories? Click here!");
		}
		setTimeout(
		() => {
			offerApp();
		},
		8 * 1000
		);
			
	</script>

	<body class="w3-theme-l5">


	<!-- Navbar -->
	<div class="w3-top">
		<div class="w3-bar w3-theme-d2 w3-left-align w3-large" >

			<img src="logo.png" style="height:100px;width:300px" alt="Avatar">
		</div>
	</div>

	<!-- Navbar on small screens -->
	<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
	<a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
	<a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
	<a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
	<a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
	</div>

	<!-- Page Container -->
	<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
	<!-- The Grid -->
	<div class="w3-row">
		<!-- Left Column -->
		<div class="w3-col m3">
		<!-- Profile -->
		<div class="w3-card w3-round w3-white">
			<div class="w3-container">
			<?php echo('<img src="'.$json['articles'][$link-1]["photoLink"].'" alt="mediaPhoto" width="340px" height="150px" >');?>
			</div>
		</div>
		<br>
		
		<!-- Accordion -->
		<div class="w3-card w3-round">
			<div class="w3-white">
			<button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
			<div id="Demo1" class="w3-hide w3-container">
				<p>Some text..</p>
			</div>
			<button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
			<div id="Demo2" class="w3-hide w3-container">
				<p>Some other text..</p>
			</div>
			<button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
			<div id="Demo3" class="w3-hide w3-container">
			<div class="w3-row-padding">
			<br>
			<div class="w3-half">
				<img src="/w3images/lights.jpg" style="width:100%" class="w3-margin-bottom">
			</div>
			<div class="w3-half">
				<img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
			</div>
			<div class="w3-half">
				<img src="/w3images/mountains.jpg" style="width:100%" class="w3-margin-bottom">
			</div>
			<div class="w3-half">
				<img src="/w3images/forest.jpg" style="width:100%" class="w3-margin-bottom">
			</div>
			<div class="w3-half">
				<img src="/w3images/nature.jpg" style="width:100%" class="w3-margin-bottom">
			</div>
			<div class="w3-half">
				<img src="/w3images/snow.jpg" style="width:100%" class="w3-margin-bottom">
			</div>
			</div>
			</div>
			</div>      
		</div>
		<br>
		
		<!-- Interests --> 
		<div class="w3-card w3-round w3-white w3-hide-small">
			<div class="w3-container">
			<p>Tags</p>
			<p>
				<span class="w3-tag w3-small w3-theme-d5">News</span>
				<span class="w3-tag w3-small w3-theme-d4">Rugby</span>
				<span class="w3-tag w3-small w3-theme-d3">Space!</span>
				<span class="w3-tag w3-small w3-theme-d2">Apple</span>
				<span class="w3-tag w3-small w3-theme-d1">China</span>
				<span class="w3-tag w3-small w3-theme">Games</span>
				<a href="https://www.w3schools.com/w3css/default.asp" target="_blank"><span class="w3-tag w3-small w3-theme-l1">+</span></a>

			</p>
			</div>
		</div>
		<br>
		
		<!-- Alert Box -->
		<div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
			<span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
			<i class="fa fa-remove"></i>
			</span>
			<p><strong>Hey!</strong></p>
			<p>Our app can personalize your news! Get your personalized newsfeed here!</p>
		</div>
		
		<!-- End Left Column -->
		</div>
		
		<!-- Middle Column -->
		<div class="w3-col m7">

		
		<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
			
			<span class="w3-right w3-opacity"></span>
			<h4><?php echo $json['articles'][$link-1]["articleName"]; ?></h4><br>
			<hr class="w3-clear">
			<?php
				$url = $linkAddress;
			?>
			<iframe id="ytplayer" type="text/html" width="100% " height="400"
				src="https://www.youtube.com/embed/<?php echo $linkAddress; ?>"
				frameborder="0" allowfullscreen></iframe> 
			<h4>Article Content</h4>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			<div class="w3-row-padding" style="margin:0 -16px">
				
			</div>
			<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button> 
			<button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button> 
		</div>
		
		<!-- End Middle Column -->
		</div>
		
		<!-- Right Column -->
		<div class="w3-col m2">
			<div class="w3-card w3-round w3-white w3-center">
				<div class="w3-container">
					<p>Related Articles:</p>
					<div class="w3-container" >
						<?php echo($json['articles'][2]["articleName"]);?>
						<?php echo('<img src="'.$json['articles'][2]["photoLink"].'" alt="mediaPhoto" width="180px" height="100px" >');?>
					</div>
					<div class="w3-container">
					<?php echo($json['articles'][1]["articleName"]);?>
						<?php echo('<img src="'.$json['articles'][1]["photoLink"].'" alt="mediaPhoto" width="180px" height="100px" >');?>
					</div>
					<div class="w3-container" >
					<?php echo($json['articles'][3]["articleName"]);?>
						<?php echo('<img src="'.$json['articles'][3]["photoLink"].'" alt="mediaPhoto" width="180px" height="100px" >');?>
						
					</div>
				</div>

			</div>
		<br>

		<div class="w3-card w3-round w3-white w3-padding-16 w3-center">
			<p>ADS</p>
		</div>
		<br>
		
		<div class="w3-card w3-round w3-white w3-padding-32 w3-center">
			<p>Mo Ads!</p>
		</div>
		
		<!-- End Right Column -->
		</div>
		
	<!-- End Grid -->
	</div>
	
	<!-- End Page Container -->
	</div>
	<br>

	<!-- Footer -->
	<footer class="w3-container w3-theme-d3 w3-padding-16">
	<h5>Footer</h5>
	</footer>

	<footer class="w3-container w3-theme-d5">
	<p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
	</footer>
	
	<script>
	// Accordion
	function myFunction(id) {
	var x = document.getElementById(id);
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
		x.previousElementSibling.className += " w3-theme-d1";
	} else { 
		x.className = x.className.replace("w3-show", "");
		x.previousElementSibling.className = 
		x.previousElementSibling.className.replace(" w3-theme-d1", "");
	}
	}

	// Used to toggle the menu on smaller screens when clicking on the menu button
	function openNav() {
	var x = document.getElementById("navDemo");
	if (x.className.indexOf("w3-show") == -1) {
		x.className += " w3-show";
	} else { 
		x.className = x.className.replace(" w3-show", "");
	}
	}
	</script>

	</body>
</html> 