<html>
<head>
	<title></title>
</head>

<body>
	<form method="POST">
	Enter value in YEAR: <input type="text" name="x"><br>
	<input type="submit" name="abc"><br>
	
	<?php
	$a = $_POST['x'];
	if(isset($_POST['abc']))
	{
	function YEAR()
	{
		global $a,$x;
		$x = ($a%12);
		
		switch($x) {
				case 0:
				echo "Chinese Zodiac Sign : Monkey";
				break;
				case 1:
				echo "Chinese Zodiac Sign : Rooster";
				break;
				case 2:
				echo "Chinese Zodiac Sign : Dog";
				break;
				case 3:
				echo "Chinese Zodiac Sign : Boar";
				break;
				case 4:
				echo "Chinese Zodiac Sign : Rat";
				break;
				case 5:
				echo "Chinese Zodiac Sign : Ox";
				break;
				case 6:
				echo "Chinese Zodiac Sign : Tiger";
				break;
				case 7:
				echo "Chinese Zodiac Sign : Rabbit";
				break;
				case 8:
				echo "Chinese Zodiac Sign : Dragon";
				break;
				case 9:
				echo "Chinese Zodiac Sign : Snake";
				break;
				case 10:
				echo "Chinese Zodiac Sign : Horse";
				break;
				case 11:
				echo "Chinese Zodiac Sign : Lamb";
				break;
				
				default:
				echo " ";
					}	
			
	}	
	YEAR();
	}	
	?>
	
	</form>
</body>
</html>