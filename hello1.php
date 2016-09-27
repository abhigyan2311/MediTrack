<?php
session_start();
?>
<html>
<body>
	<?php
		if($_SESSION["username"]) 
		{
			echo "Welcome"; 
			echo $_SESSION["username"]; 
			echo "<br>";
			?>
			<b>Click here to <a href="logout.php" tite="Logout">Logout.</b>
			<?php
		}
		
		else
		{
			echo "You are not logged in";
			echo "<br>";
		}
		
	?>
	
</body>
</html>