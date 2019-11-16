<?php

function delete_file($id)

{

		include_once('../car1/admin/includes/config.php');

		$dsql ="SELECT Vimage1,Vimage2,Vimage3,Vimage4,Vimage5 FROM tblvehicles where id=:id";


		$dquery = $dbh -> prepare($dsql);
		$dquery->bindParam(':id',$id,PDO::PARAM_STR);
		$dquery->execute();
		$dresults=$dquery->fetchAll(PDO::FETCH_OBJ);

			
		foreach ($dresults as $key) {
			
			unlink($key->Vimage1);
			unlink($key->Vimage2);
			unlink($key->Vimage3);
			unlink($key->Vimage4);
			unlink($key->Vimage5);

		/*	echo $key->Vimage1."<br>";
			echo $key->Vimage2."<br>";
			echo $key->Vimage3."<br>";
			echo $key->Vimage4."<br>";
			echo $key->Vimage5."<br>";
*/
		}	


}
delete_file(41);

?>                                         