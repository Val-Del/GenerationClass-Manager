<?php
function ChargerClasse($classe)
{
	if (file_exists("PHP/CONTROLLER/CLASSE/" . $classe . ".Class.php"))
	{
		require "PHP/CONTROLLER/CLASSE/" . $classe . ".Class.php";
	}
	if (file_exists("PHP/MODEL/" . $classe . ".Class.php"))
	{
		require "PHP/MODEL/" . $classe . ".Class.php";
	}
	
}
spl_autoload_register("ChargerClasse");