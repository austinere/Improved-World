<?php
function db_connect()
				mysql_connect('localhost','root','root');
				mysql_select_db('improvedworld');
				// Check connection
				if (mysqli_connect_errno()) {
  				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}
?>