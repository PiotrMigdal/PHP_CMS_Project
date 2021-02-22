<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP


	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
if(5>10){

} elseif(7<5){

}else {
	echo "I love php<br>";
}

for($i = 0; $i < 10; $i++){
	echo $i . "<br>";
}
$num = 33;
switch($num){
	case 32:
	echo "Number is 32";
	break;
	case 33:
	echo "Number is 33";
	break;
	case 34:
	echo "Number is 34";
	break;
	case 35:
	echo "Number is 35";
	break;
	case 36:
	echo "Number is 36";
	break;

	default:
	echo "no this number";
	break;
}

?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>