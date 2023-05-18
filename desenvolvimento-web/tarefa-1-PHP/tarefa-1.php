<?php
		if(isset($_POST['submit'])){
			$a = $_POST['a'];
			$b = $_POST['b'];
			$c = $_POST['c'];

			$delta = pow($b, 2) - 4*$a*$c;

			if($delta < 0){
				echo "A equação não possui raízes reais";
			}
			else{
				$x1 = (-$b + sqrt($delta)) / (2*$a);
				$x2 = (-$b - sqrt($delta)) / (2*$a);
				echo "As raízes da equação são: x1 = $x1 e x2 = $x2";
			}
		}
	?>