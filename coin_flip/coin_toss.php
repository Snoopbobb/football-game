<?php 

	$selection = $_GET['selection'];

	$coin = array('heads','tails');

	$toss = array_rand($coin);

	if ($toss == 0) {
		$toss ='heads';
	} else {
		$toss = 'tails';
	}

	if ($toss == $selection) {
		$statement = "The coin is showing $toss. <br> 
					 You won the toss! <br>";
					 //Would you like to kick or receive?;
					 $pic = 'images/happy.png';
	} else {
		$statement = "The coin is showing $toss. <br>
		 			 You lost the coin toss.";
		 			 $pic = 'images/sad.png';

	}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>The Coin Toss</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<img src="<?php echo "$pic" ?>" alt="">
		<h3><?php echo $statement ?></h3>
	</body>
</html>