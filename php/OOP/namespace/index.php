<?php

include_once "config.php";



$obj = new mobile();

$obj -> mi(); 



echo "</br>";


include_once "config2.php";

// namespace space; this is name space in config 2 file and it has same class name mobile which have config file 1

use space\mobile as newmobile;  // use statement use for naming the namespace class to new name after import

$obj2 = new newmobile();

$obj2 -> Samsung();


