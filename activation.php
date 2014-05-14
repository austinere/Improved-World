<meta charset="utf-8">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
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


	<div class="page1">
		<section class="impworld">
		<a href="index.php" style="text-decoration: none; color: inherit">
			<div>Improved</div>
			<div>World</div></a>
			
		</section>
		
	</div>	
		
<div class='top-box'></div>

	<!--Bottom Bar Start-->
	
 	<section class="bottom-box">	
<div class='bottom-box'>
	<div class='bottom-content'><div>
</div>
	</section>



	</section>


<?php
				
				
				mysql_connect('','','');
				mysql_select_db('improvedworld');
				// Check connection
				if (mysqli_connect_errno()) {
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
				
		$email = $_GET['email'];
		$cle = $_GET['cle'];
 
// Récupération de la clé correspondant au $login dans la base de données
				("SELECT validation_key,active FROM users WHERE email=$email ");
if($stmt->execute(array(':email' => $email)) && $row = $stmt->fetch())
  {
    $validation_key = $row['validation_key'];	// Récupération de la clé
    $active = $row['active']; // $actif contiendra alors 0 ou 1
  }
 
 
// On teste la valeur de la variable $actif récupéré dans la BDD
if($active == '1') // Si le compte est déjà actif on prévient
  {
     echo "Your account is already active, you can log in!";
  }
else // Si ce n'est pas le cas on passe aux comparaisons
  {
     if($cle == $validation_key) // On compare nos deux clés	
       {
          // Si elles correspondent on active le compte !	
          echo "Votre compte a bien été activé !";
 
          // La requête qui va passer notre champ actif de 0 à 1
          $stmt = $dbh->prepare("UPDATE users SET active = 1 WHERE email=$email ");
          $stmt->bindParam(':email', $email);
          $stmt->execute();
       }
     else // Si les deux clés sont différentes on provoque une erreur...
       {
          echo "Sorry but your account cannot be activated...";
       }
  }
			
?> 

		    
	
<!--Contact Form-->
<script> /* var bcf_settings = { buttonText:'Contact Us', buttonTop:'30%', language:'en_US' }; // Better Contact Form Settings */ (function (d, s, id) { if ('https:' == document.location.protocol || d.getElementById(id)) return; var js, fjs = d.getElementsByTagName(s)[0]; js = d.createElement(s); js.id = id; js.src = "http://bettercontactform.com/contact/media/0/c/0cbcee1efb95e3d4dcf451d638c4576803cf1ef1.js"; fjs.parentNode.insertBefore(js, fjs); }(document, "script", "bcf-render"));</script> <a id="bcf_trigger" href="http://bettercontactform.com" rel="bcf_trigger">Contact Form</a>
</script>

<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>

	</body>
</html>