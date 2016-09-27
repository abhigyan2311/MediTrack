<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Sticky Table Headers Revisited | Demo 1</title>
		<meta name="description" content="Sticky Table Headers Revisited: Creating functional and flexible sticky table headers" />
		<meta name="keywords" content="Sticky Table Headers Revisited" />
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
				<h1>Give your order<em>Food Park</em> <span>Enter a good tagline</span></h1>	
				<nav class="codrops-demos">
					<a class="current-demo" href="index.html" title="Basic Usage">Lunch</a>
					<a href="#" title="Biaxial Headers">Snacks</a>
					<a href="#" title="Wide Tables">Dinner</a>
				</nav>
			</header>
			<div class="component">
				<h2>Breakfast</h2>
				<p>Have the first meal of the day</p>
				<table>
				
				
					<thead>
						<tr>
							<th>ID</th>
							<th>Items</th>
							<th>Price</th>
						</tr>
					</thead>
					<tbody>
					<?php
				$con=mysql_connect("localhost","root","vitcse");
				if(!$con)
				{
					die("no connection");
				}
				mysql_select_db("menu",$con);
				$sql="select * from lunch";
				$mydata=mysql_query($sql,$con);
						while($record=mysql_fectch_array($mydata))
						{
							echo"<tr>"
							echo "<td class="user-name">".$record['id']."</td>";
							echo "<td class="user-email">".$record['items']."</td>";
							echo "<td class="user-phone">".$record['price']."</td>";
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