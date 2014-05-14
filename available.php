<?php 
$mysql_db_hostname = "localhost"; 
$mysql_db_user = "root"; 
$mysql_db_password = "root"; 
$mysql_db_database = "improvedworld";

$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
mysql_select_db($mysql_db_database, $con) or die("Could not select database"); 

if(isset($_POST['email']) && !empty($_POST['email'])){ $email=strtolower(mysql_real_escape_string($_POST['email'])); 

$query="select * from users where LOWER(email)='$email'"; $res=mysql_query($query); $count=mysql_num_rows($res); $HTML=''; if($count > 0){ $HTML='user exists'; }else{ $HTML=''; } echo $HTML; 
} 
?>