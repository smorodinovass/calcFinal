<html>
	<head>
		<title>Calc</title>
		
		<link rel="stylesheet" href="styles/main.css" />
		
		<style>
			input {
				display: block;
				margin:6px;
				width: 120px;
				text-align: center;
			}
			
			button {
				margin: 6px;
				width: 51px;
			}
			
			.pressed {
				background-color: pink;
			}
		</style>
			
	</head>
	<body>
		<h1>Calculator PHP</h1>
		<?php
			$x=""; $y=""; $result="";

			if (isset($_REQUEST["x"])) {
				$x = $_REQUEST["x"];
				$y = $_REQUEST["y"];
				$operation = $_REQUEST["operation"];
				if ($operation == "+")
					$result = $x + $y;
				else
					$result = $x - $y;
			}
		?>
		<form>
			<input name="x" value="<?=$x?>" />
			<input name="y" value="<?=$y?>" />
			<input type="submit" name="operation" value="+" />
			<input type="submit" name="operation" value="-" />
			<input value="<?=$result?>"/>
		</form>
		<h3>Другая работа</h3>
		<textarea></textarea>
	</body>

</html>