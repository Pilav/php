<?php
	function Counter($path_to_file){
		$file_arr = file($path_to_file);
		$cnt = count($file_arr);
		return $cnt;
	}
	echo "Количество строк в файле: ".Counter("file.txt");
?>


