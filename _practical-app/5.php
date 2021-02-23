<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
echo pow(3,3);
echo "<br>";
echo strlen("This is string");
echo "<br>";
echo count([31,312,5643,349784,884,5234,23,47,6,54543]);

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>