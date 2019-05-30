<html>
<head>
</head>
<body>
<center>
<form id="form" method = "GET" action = "<?php echo $_SERVER['PHP_SELF']; ?>">
	num <input type="number" id = "age" name="age" required/> <hr/>
	nub <input type="number" id = "age1" name="age1" required/> <hr/>
	<button class="btn" name = "btn" value = "yea">Tell Me</button> <hr/>
	<?php
	if(isset($_GET['btn'])&& $_GET['btn'] == 'yea'){
		
	$num = $_GET['age'];
	$nub = $_GET['age1'];
	$int_teller = multiply($num, $nub);

	echo '<p style="color: lime;">'.$int_teller.'</p>';
	}
	function multiply($num, $nub, bool $to_words ){
		if ($num > 0 && $nub > 0 ){
			$to_words = true;
			echo multiply(-$num, -$nub);
			
		}
		if ($nub = String){
			$to_words = false;
			echo '$nub "is not a number"';
		}
	
	}
	?>
	</form>
	</center>
</body>
</html>