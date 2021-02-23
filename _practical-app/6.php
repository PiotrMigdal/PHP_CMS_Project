
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>

		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
<?php
if(isset($_POST['submit6'])){
	$text6 = $_POST['text6'];
	echo "This works: " . $text6;
}
?>
<form action="6.php" method="post">
<input type="text" name="text6">
<input type="submit" name="submit6">
</form>

	<?php

/*  Step1: Make a form that submits one value to POST super global


 */


?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>