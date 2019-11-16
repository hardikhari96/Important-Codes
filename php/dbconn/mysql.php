<?php

	//Connection 
	

	$conn = new mysqli("localhost","root","","test");


	if($conn){

		echo "connected";
	}
	else {

		echo "something wrong";
	}


	//Query

	$qury = "insert into user values('pppp','bbb')";
	$qury2 = "select * from user";

	$data=$conn->query($qury);

