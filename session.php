<?php
session_start();

if(isset($_SESSION['teste']))
{
	$tst = $_SESSION['teste'];
	unset($_SESSION['teste']);
	echo $tst.PHP_EOL; // teste 123
	print_r($_SESSION);	
}
else
{
	$_SESSION['teste'] = '123';
}

session_write_close();
?>