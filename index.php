<?php


	if(isset($_POST['submit'])) {
	$email = htmlspecialchars(trim($_POST['email']));
	$password = htmlspecialchars(trim($_POST['password']));
	$active = ($_POST['active']);
	
	if(empty($email))
	{
		echo "Enter your email and password";
	}else if (empty ($password))
	{
		echo "Enter your password";
	}else{
	
		
	
			
				mysql_connect('localhost','','');
				mysql_select_db('improvedworld');
				// Check connection
				if (mysqli_connect_errno()) {
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				$password = md5($password);
		
		$login = mysql_query("SELECT * FROM users WHERE email='$email' AND password='$password'");
		$rows = mysql_num_rows($login);
		if($rows == 1)
		{
			    $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password' AND active=1";
				$result = mysql_query($sql) or die(mysql_error());
				$count = mysql_num_rows($result);
				if ($count == 1){
				session_start();
				$_SESSION['submit'] = $_POST['submit'];
				header('Location: action1.php');
				exit();
				
				}
				else echo "<div class='loginissue'>Please activate your account<br>using the email we sent you.<br></div>";
			}	
		else echo "<div class='loginissue'>Wrong email or password</div>";
	}	
}

				mysql_connect('localhost','','');
				mysql_select_db('improvedworld');
				// Check connection
				if (mysqli_connect_errno()) {
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
			$sql = ("SELECT COUNT(*) FROM users");
			$rs = mysql_query($sql);
 			$result = mysql_fetch_array($rs);
 

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
				anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7', 'page8'],
			});
		});
		</script>
    </head>
    

    
	<body>

<div id="fullpage">
     <ul>
         <li><a href="#page1"></a></li>
         <li><a href="#page2"></a></li>
         <li><a href="#page3"></a></li>
         <li><a href="#page4"></a></li>
         <li><a href="#page5"></a></li>
         <li><a href="#page6"></a></li>
         <li><a href="#page7"></a></li>
         <li><a href="#page8"></a></li>
     </ul>
</div>

	<!--Page1 Text Start-->
<div id="fullpage">

	<div class="page1">
		<a id="page1"></a>
		<section class="impworld">
			<div>Improved</div>
			<div>World</div>
		</section>
	
		<section class="textpage1">
			<div>
			<?php  echo $result[0];?> people helped improving the world 
			you're living in.</div>
			<div>don't you want to return them the favor ?</div>
		</section>
  
	<!--Page1 Text End-->




	<!--Top Bar Start-->

    <section class="container">
    <div class="login">
          <h1>Sign In</h1>
      <form method="post" action="index.php">
        <p><input type="text" name="email" value="" placeholder="Email"  autofocus required></p>
        <p><input type="password" name="password" value="" placeholder="Password" autofocus required></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
      </form>

    <div class="login-help">
      <p>Forgot your password? <a href="resetuserpassword.php">Click here to reset it</a>.</p>
      <p>Don't have an account yet? <a href="signup.php">Click here to create one</a>.</p>
    </div>
    
    
  </section>
	
 <div class='top-box'></div>






	<!--Bottom Bar Start-->
	
 	<section class="bottom-box">	
<div class='bottom-box'>
	<div class='bottom-content'><div>
</div>
	</section>

	
	<!--Bottom Bar End-->    


	<!--Arrow Down Start--> 
	<section class="arrow_down">	
<a data-scroll data-anchor href="#page2"><img style="border:0;" src="http://austinere.free.fr/improvedworld/images/db_arrow_down.png" alt="page2"></a>
	</section>

	<!--Arrow Down End--> 
	<!--Page2 Down End--> 
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>

<!--Page 2 Start--> 

<div class="page2">
<a id="page2"></a>


   <section class="textpage2">	 
   <p>You can make the world<p>
   <p>a better place.<p>
   </section>


	<section class="arrow_down2">	
<a data-scroll data-anchor href="#page3"><img style="border:0;" src="http://austinere.free.fr/improvedworld/images/arrow_down.png" alt="page3"></a>

	</section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>
<!--Page 2 End--> 


<!--Page 3 Start--> 

<div class="page3">
<a id="page3"></a>
 
   <section class="textpage3">	 
   <p>All it takes is 3 actions<p>
   <p>to 3 different people<p>
   </section>


	<section class="arrow_down3">	
<a data-scroll href="#page4"><img style="border:0;" src="http://austinere.free.fr/improvedworld/images/arrow_down.png" alt="page4"></a>
	</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>		
</div>
<!--Page 3 End-->

<!--Page 4 Start--> 

<div class="page4">
<a id="page4"></a>
 
   <section class="textpage4">	 
   <p>It might take you a day,<p>
   <p>a month, or even a year<p>
   <p>to complete these three actions...<p>
   </section>


	<section class="arrow_down4">	
<a data-scroll href="#page5"><img style="border:0;" src="http://austinere.free.fr/improvedworld/images/arrow_down.png" alt="page5"></a>
	</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>	
</div>
<!--Page 4 End-->

<!--Page 5 Start--> 

<div class="page5">
<a id="page5"></a>
 
   <section class="textpage5">	 
   <p>It doesn't matter!<p>
   </section>


	<section class="arrow_down5">	
<a data-scroll href="#page6"><img style="border:0;" src="http://austinere.free.fr/improvedworld/images/arrow_down.png" alt="page6"></a>
	</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>		
</div>
<!--Page 5 End-->

<!--Page 6 Start--> 

<div class="page6">
<a id="page6"></a>
 
   <section class="textpage6">	 
   <p>What matters, is that you<p>
   <p>helped people and made<p>
   <p>the world a better place.<p>
   </section>


	<section class="arrow_down6">	
<a data-scroll href="#page7"><img style="border:0;" src="http://austinere.free.fr/improvedworld/images/arrow_down.png" alt="page7"></a>
	</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>		
</div>
<!--Page 6 End-->

<!--Page 7 Start--> 

<div class="page7">
<a id="page7"></a>
 
   <section class="textpage7">	 
   <p>Sign up for free today and<p>
   <p>help human kind to get better<p>
   </section>

	<section class="sign_up_button0">	
<a data-scroll href="signup.php"><img style="border:0;" src="http://austinere.free.fr/improvedworld/images/signup.png" alt="signup"></a>
	</section>
	
	<section class="faqbutton">	
<a data-scroll href="#page8"><img style="border:0;" src="http://austinere.free.fr/improvedworld/images/faqbutton.png" alt="page8"></a>
	</section>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>		
</div>
<!--Page 7 End-->

<!--Page 8 Start--> 

<div class="page8">
<a id="page8"></a>
 
   <section class="textpage8">	 
   <p1>Q: your slides are super engaging but i don't know if I have what it takes to help people.<p1>
   <p2>A: first of all, thank you! please understand that all you need, are a functioning heart and brain.
   We might not know you, but we have a good feeling you have both!<p2>
   
   <p3>Q: why are you doing this?<p3>
   <p4>A: because we truly believe that the world we live in disserve a huge improvement. Nobody is
   going to make it better for us so let's do this all together.<p4>
   
   <p3>Q: You seem honest, but come on... How much is it going to cost me to "help" the world?<p3>
   <p4>A: "Improved World" is 100% free. We ask you very little information about you and will never
   violate your privacy or sell these information.<p4>
   
   <p3>Q: Wait... is this some sort of cult? my mom told me i couldn't be part of a cult!<p3>
   <p4>A: We are not a cult nor a religion. However our team is composed by people from all beliefs
   and cultures. improving the world starts with accepting diversity.<p4>
   
   <p3>Q: Lies! You're not going to change the world!<p3>
   <p4>A: This is not a question but we'll still answer it. Here is the thing. Our team thinks we
   can do a lot with small actions. once, someone said "you're either part of the problem or the solution."
   Pick up a side...<p4>
   </section>

	<section class="sign_up_button">	
<a data-scroll href="signup.php"><img style="border:0;" src="http://austinere.free.fr/improvedworld/images/signup.png" alt="signup"></a>
	</section>
	
	<section class="arrow_up">	
<a data-scroll href="#page1"><img style="border:0;" src="http://austinere.free.fr/improvedworld/images/arrow_up.png" alt="faq1"></a>
	</section>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>		
</div>
<!--Page 8 End-->

<!--Contact Form-->
<script> /* var bcf_settings = { buttonText:'Contact Us', buttonTop:'30%', language:'en_US' }; // Better Contact Form Settings */ (function (d, s, id) { if ('https:' == document.location.protocol || d.getElementById(id)) return; var js, fjs = d.getElementsByTagName(s)[0]; js = d.createElement(s); js.id = id; js.src = "http://bettercontactform.com/contact/media/0/c/0cbcee1efb95e3d4dcf451d638c4576803cf1ef1.js"; fjs.parentNode.insertBefore(js, fjs); }(document, "script", "bcf-render"));</script> <a id="bcf_trigger" href="http://bettercontactform.com" rel="bcf_trigger">Contact Form</a>
</script>

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
</div>	
	</body>
</html>
