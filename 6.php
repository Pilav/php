<?php
	function createPhrase($n){
		$ost = $n % 100;
		if (($ost > 10) and ($ost < 20))
			echo "У тебя $n пирожков";
		else{
			$ost = $n % 10;
			switch ($ost){
				case 1: echo "У тебя $n пирожок"; break;
				case 2: case 3: case 4: echo "У тебя $n пирожка"; break;
				default: echo "У тебя $n пирожков";	
			}
		}
	}
	createPhrase(456235);
?>


