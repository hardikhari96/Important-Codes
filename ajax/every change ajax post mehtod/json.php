<?php


//header('Content-type: Application/json');



//$arrayName = array(
	/*array($_POST['name'][0],$_POST['id'][0]),
	array($_POST['name'][1],$_POST['id'][1]),
	array($_POST['name'][2],$_POST['id'][2]),
	array($_POST['name'][3],$_POST['id'][3]),
	array($_POST['name'][4],$_POST['id'][4])
	);*/
//$json = json_encode ($arrayName); 

//print_r($json);?>


<table>
	<tr>
		<th>Name</th>
		<th>Id</th>
	</tr>
	<tr>
		<td><?php echo $_POST['name'][0]; ?></td>
		<td><?php echo $_POST['id'][0]; ?></td>
	</tr>
	<tr>
		<td><?php echo $_POST['name'][1]; ?></td>
		<td><?php echo $_POST['id'][1]; ?></td>
	</tr>
	<tr>
		<td><?php echo $_POST['name'][2]; ?></td>
		<td><?php echo $_POST['id'][2]; ?></td>
	</tr>
	<tr>
		<td><?php echo $_POST['name'][3]; ?></td>
		<td><?php echo $_POST['id'][3]; ?></td>
	</tr>
	<tr>
		<td><?php echo $_POST['name'][4]; ?></td>
		<td><?php echo $_POST['id'][4]; ?></td>
	</tr>
</table>