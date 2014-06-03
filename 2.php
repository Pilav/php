<?php
	function Palindrom($str){
		$len = strlen($str);
		$flag = TRUE;	//будем считать, что слово уже является палиндромом
		for ($i = 0; $i < $len; $i++)
			if ($str{$i} != $str{$len-1-$i}){
				$flag = FALSE;
				break;
			}
		return $flag;
	}
	echo Palindrom("utrovortu") == TRUE ? "Палиндром" : "Не палиндром";
?>
