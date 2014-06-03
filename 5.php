<?php
	header("Refresh: 1");	
	function generateTime(){
		return date("H:i:s");
	}
	echo "<h1>".generateTime()."</h1>";
?>
