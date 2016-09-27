<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>MediTrack</title>
		<meta name="description" content="Give your order" />
		<meta name="keywords" content="Give your order" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			
			<header>
				<h1>Meditrack<em></em> <span></br>Search by Medicine</span></h1>	
				<nav class="codrops-demos">
					
				</nav>
			</header>
			<div class="component">
				<h2></h2>
				<p></p>
				<table>
				
				
					<thead>
						<tr>
							<th>City</th>
							<th>Patient Name</th>
							<th>Shopname Name</th>
							<th>Medicine</th>
						</tr>
					</thead>
					<tbody>
					<?php
				$con=mysql_connect("localhost","scobbyabhi","Medbox@12345");
				if(!$con)
				{
					die("no connection");
				}
				mysql_select_db("details",$con);
				$sql="select patlogin.pcity,patlogin.pname,shoplogin.name,patlogin.pmedicine from patlogin,shoplogin where patlogin.pmedicine=shoplogin.medicines";
				$mydata=mysql_query($sql,$con);
						while($record=mysql_fetch_array($mydata))
						{
							echo "<tr>";
							echo "<td >".$record['pcity']."</td>";
							echo "<td >".$record['pname']."</td>";
							echo "<td >".$record['name']."</td>";
							echo "<td >".$record['pmedicine']."</td>";
							echo "</tr>";
						}
						?>
					</tbody>
				</table>
				
			</div>
			
		</div><!-- /container -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
		<script src="js/jquery.stickyheader.js"></script>
	</body>
</html>