<?php
			include './db.php';
			session_start();
				$con=mysql_connect($host,$user,$password);
				if(!$con)
				{
					die("no connection");
				}
				mysql_select_db($db,$con);
				if(isset($_POST['username']))
				{
				$_username=$_POST['username'];
				$_password=$_POST['password'];
				/*$_username = stripslashes($_username);
				$_password = stripslashes($_password);
				$_username = mysql_real_escape_string($_username);
				$_password = mysql_real_escape_string($_password);*/
				$sql="select * from doclogin where username='".$_username."'and password='".$_password."'limit 1 ";
				$res=mysql_query($sql);
				$row = mysql_fetch_array($sql); 
				if(mysql_num_rows($res)==1)
				{
					$_SESSION["username"] = $_username;
					
				}
				else
				{
					$error="Your Login Name or Password is invalid";
					exit();
				}
				if(isset($_SESSION["username"])) 
				{
					header ('location: docview.php');
					exit();
				}
				}
				
				
				if(isset($_POST['name']))
				{
				 // Fetching variables of the form which travels in URL
				$name = $_POST['name'];
				$username=$_POST['usernameup'];
				$password = $_POST['passwordup'];
				$spec=$_POST['spec'];
				$numner=$_POST['number'];
				$city=$_POST['city'];
				$state=$_POST['state'];
				$country=$_POST['country'];
				//Insert Query of SQL
				$query = mysql_query("insert into doclogin(username,password,dname,speciality,number,dcity,dstate,dcountry) values ('$username','$password','$name','$spec','$numner','$city','$state','$country')");
				
				
				mysql_close($con); // Closing Connection with Server
				}
				
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Login and Registration Form with HTML5 and CSS3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="">
                    
                </a>
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                       
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>MediTrack Login and Registration For <span>Doctors</span></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                           <form method="post" action="doclogin.php" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername "/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form method="post" action="doclogin.php" autocomplete="on">  
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="name" class="uname" data-icon="u">Name</label>
                                    <input id="name" name="name" required="required" type="text" placeholder="myname" />
                                </p>
                                <p> 
                                    <label for="username" class="uname" data-icon="e" >Username</label>
                                    <input id="usernameup" name="usernameup" required="required" type="text" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Password </label>
                                    <input id="passwordup" name="passwordup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
								<p> 
                                    <label for="spec" class="uname" data-icon="p">Speciality </label>
                                    <input id="spec" name="spec" required="required" type="text" placeholder="eg. Cardiologist"/>
                                </p>
								<p> 
                                    <label for="number" class="uname" data-icon="p">Contact </label>
                                    <input id="number" name="number" required="required" type="text" placeholder="eg.0123456789"/>
                                </p>
								<p> 
                                    <label for="city" class="uname" data-icon="p">City</label>
                                    <input id="city" name="city" required="required" type="text" placeholder="eg. Vellore"/>
                                </p>
                                <p> 
                                    <label for="state" class="uname" data-icon="p">State</label>
                                    <input id="state" name="state" required="required" type="text" placeholder="eg. TamilNadu"/>
                                </p>
								<p> 
                                    <label for="country" class="uname" data-icon="p">Country</label>
                                    <input id="country" name="country" required="required" type="text" placeholder="eg. India"/>
                                </p>
								
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>