<?php 
	$a = array(array(1,2,3),array(4,5,6),array(7,8,9));
	$b = array(array(7,8,9),array(4,5,6),array(1,2,3));


	function printMatrix($mat){
		$m = count($mat);
		$n = count($mat[0]);
		echo "<br/>";
		for($i=0;$i<$m;$i++){
			for($j=0;$j<$n;$j++){
				echo $mat[$i][$j]." ";
			}
			echo "<br/>";
		}
	}
	echo "The two matrixs are:"."<br/>";
	printMatrix($a);
	printMatrix($b);

	echo"<br/>";

	function printTranspose($mat){
		$m = count($mat);
		$n = count($mat[0]);
		echo "<br/>";
		for($i=0;$i<$m;$i++){
			for($j=0;$j<$n;$j++){
				echo $mat[$j][$i]." ";
			}
			echo "<br/>";
		}
	}
	echo "The transpose of two matrixs are:"."<br/>";
	printTranspose($a);
	printTranspose($b);

	echo"<br/>";

	function printAdd($a, $b){
		$c = [];
		$m = count($a);
		$n = count($a[0]);
		for($i=0;$i<$m;$i++){
			for($j=0;$j<$n;$j++){
				$c[$i][$j] = $a[$i][$j] + $b[$i][$j];
			}
		}
		printMatrix($c);
	}
	echo "The Addition of two matrixs are:"."<br/>";
	printAdd($a, $b);

	echo "<br/>";

	function multMatrix($a,$b){
		$m = count($a);
		$n = count($a[0]);
		$o = count($b);
		$p = count($b[0]);
		$c = [];
		for($i=0;$i<$m;$i++){
			for($j=0;$j<$o;$j++){
				$c[$i][$j] = 0;
				for($k=0;$k<$n;$k++){
					$c[$i][$j] += $a[$i][$k] * $b[$k][$j];
				}
			}
		}
		printMatrix($c);
	}

	echo "The multiplication of two numbers:"."<br/>";
	multMatrix($a, $b);
 ?>