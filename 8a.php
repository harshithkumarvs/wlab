<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
	<style type="text/css">
		table,th,td{
			border: 1px solid black;
			background-color: lightblue;
			text-align: center;
			width: 33%;
		}
		table{margin: auto;}
		input{text-align: right;}
	</style>
</head>
<body>
	<form method="post">
		<table>
			<caption><h2>Calculator</h2></caption>
			<tr><td>First Number:</td><td><input type="text" name="num1" placeholder="0"></td><td rowspan="2"><input type="submit" name="submit" value="calculate"></td></tr>
			<tr><td>Secod Number:</td><td><input type="text" name="num2" placeholder="0"></td></tr>
			<?php
			if (isset($_POST['submit'])) {
			 	$num1 = $_POST['num1'];
			 	$num2 = $_POST['num2'];
			 	if (is_numeric($num1) and is_numeric($num2)) {
			 		echo "<tr><td colspan='2'>Addition:</td><td>".($num1+$num2)."</td>";
			 		echo "<tr><td colspan='2'>Subtraction:</td><td>".($num1-$num2)."</td>";
			 		echo "<tr><td colspan='2'>Multiplication:</td><td>".($num1*$num2)."</td>";
			 		echo "<tr><td colspan='2'>Division:</td><td>".($num1/$num2)."</td>";
			 	}
			 	else{
					echo "<script type='text/javascript'>alert('enter valid number');</script>";			 	
			 	}
			 } 
			?>
		</table>
	</form>
</body>
</html>