<?php

require_once "file1.php";

class newMobiles extends mobile {   // inherit class new mobile on mobile

	function panasonic ()
	{
		echo "panasonic";
	}

	function samsung()
	{
		echo "samsung";
	}

	function mi()
	{
		echo " this is overrided on mi first function of file no 1";
	}

	
}

$obj = new newMobiles(); // object creation of class new mobile

$obj->mi();
echo "<br />";


echo "<br />";
$obj->samsung();



?>