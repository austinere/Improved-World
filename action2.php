<?php
session_start();
if (!isset($_SESSION['submit'])) {
	header ('Location: index.php');
	exit();
}

	$con=mysqli_connect("localhost","","","improvedworld");

	if ("SELECT ($email) FROM users WHERE actions_completed='$actions_completed'");
	   {
	   $get_rows = count($mysql_get_users);
	   if($get_rows >2)
	   header ('Location: action3.php');
	   }
	   mysql_close($con);
?>

<!DOCTYPE html>

    <head>
        <title>Improved World</title>
        <meta http-equiv="Content-Type" content="text/html; charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <link href="css/hover-min.css" rel="stylesheet" media="all">
        <link rel="icon" type="image/png" href="tabicone.jpg"/> 
        <link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>	

		<script type="text/javascript">
			$(document).ready(function() {
   			$('#fullpage').fullpage({
				anchors: ['page1'],
			});
		});
		</script>
    </head>

	<body>
	

	<div class="page1">
		<section class="impworld">
		<a href="index.php" style="text-decoration: none; color: inherit">
			<div>Improved</div>
			<div>World</div></a>
		</section>
	</div>	

	
	<div class='top-box'>
	</div>
	
	<section class='twitter_tell'>
		<a href="https://twitter.com/intent/tweet?button_hashtag=improvedworld" class="twitter-hashtag-button" data-related="ImprovedWorld">Tweet #improvedworld</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</section>

<div class="fixed-size-square">
</div>

	<section class='tellus'>
		<div>Did you do something you're proud of? Tell us, tell the world!<div>
	</section>	

	<!--Bottom Bar Start-->
	
 	<section class="bottom-box">	
		<div class='bottom-box'>
		<div class='bottom-content'>
	</section>

	
	<section class="inspiration">
   		<a href="https://twitter.com/improvedworld" style="text-decoration: none; color: inherit"; target="_blank">
   		<div> (Need some inspiration? Click here and</div>
   		<div> Check out some of our users testimonials)</div></a>
	</section>
   
   
	<section class="submitaction">
		<a href="action3.php" style="text-decoration: none; color: inherit">
		<input type="submit" name="valide_action" value="I DIT IT">
		
	</section>
	
	<section class="remember">
   		<div> Remember, it's not a race, it's ok if it takes time...</div>
	</section>
	
	<section class="logout">
	<a href="logout.php" style="text-decoration: none; color: inherit">Logout</a>
	</section>
	
	<div class="logout-square">
	</div>

<!--<div class="didit-square">
</div>--> 

	<!--Page1 Text Start-->

   <section class="textactions">
<?php  

				
					$con=mysqli_connect("localhost","","","improvedworld");
				
				if (mysqli_connect_errno()) {
 				echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
				
				$result = mysqli_query($con,"SELECT * FROM actions2 ORDER BY RAND() LIMIT 0,1;");

				while($row = mysqli_fetch_array($result)) {
 					 echo $row['action'];
  					 echo "<br>";
  					 echo "<br>";
  					 echo "<br>";
  					 echo "<br>";
  					 echo "<br>";
  					 echo "<br>";
  					 echo "<br>";
  					 echo "<br>";
}

mysqli_close($con);
?>
	</section>


<!--Contact Form-->
<script> /* var bcf_settings = { buttonText:'Contact Us', buttonTop:'30%', language:'en_US' }; // Better Contact Form Settings */ (function (d, s, id) { if ('https:' == document.location.protocol || d.getElementById(id)) return; var js, fjs = d.getElementsByTagName(s)[0]; js = d.createElement(s); js.id = id; js.src = "http://bettercontactform.com/contact/media/0/c/0cbcee1efb95e3d4dcf451d638c4576803cf1ef1.js"; fjs.parentNode.insertBefore(js, fjs); }(document, "script", "bcf-render"));</script> <a id="bcf_trigger" href="http://bettercontactform.com" rel="bcf_trigger">Contact Form</a>
</script>


<script src="js/smooth-scroll.js"></script>
<script src='smooth-scroll.js'></script>
	<script>
		smoothScroll.init({
			speed: 350,
			easing: 'easeInOutCubic',
			offset: 5,
			updateURL: false,
			callbackBefore: function ( toggle, anchor ) {},
			callbackAfter: function ( toggle, anchor ) {}
		});
	</script>
	
	<!-- Refresh To Top 
<script type="text/javascript">
window.onload = function() {
 setTimeout (function () {
  scrollTo(0,0);
 }, 100); //100ms for example
}
</script>	
-->
</div>	
	
	</body>
</html>