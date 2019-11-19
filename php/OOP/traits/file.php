<?php

trait coll_name {

		public function honda(){


		echo "Honda car";

		}

		function kia()
		{

			echo "kia car";
		}

}


class cars { 

	use coll_name;

	function maruti()
	{

		echo "Maruti car";
	}
}


$obj = new cars();

$obj->honda();
echo "<br />";
$obj->kia();
echo "<br />";
$obj->maruti();
?>	