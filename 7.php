<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="refresh" content="1"/>
	<style>
		p {
			color:white;
			font-size:90px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
		body{background-color:black;}
	</style>
 	<?php
		date_default_timezone_set("Asia/Calcutta");
	 	echo"<p>".date(" h: i : s A")."</p>";
	?> 
</head>