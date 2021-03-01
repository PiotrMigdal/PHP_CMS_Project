<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">



	<?php

	/*  Create a link saying Click Here, and set
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	?>
	<a href="http://localhost/PHP_CMS_Project/_practical-app/9.php?number=2">Click here</a>
	<?php
		if(isset($_GET['number'])){
			echo $_GET['number'];
		}
	?>


	<?php
		$name = 'cookie';
		$value = 'hello ';
		$expiration = time() + (60*60*24*7);
		setcookie($name,$value,$expiration);
		if(isset($_COOKIE['cookie'])){
			echo $_COOKIE['cookie'];
		}
	?>


	<?php
	session_start();
	$_SESSION['hello'] = 'moto';
	if(isset($_SESSION['hello'])){
		echo $_SESSION['hello'];
	}
	?>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>