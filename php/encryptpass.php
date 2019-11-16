
<style type="text/css">
	
	table,div {

		margin: 50px ;
		width: 500px;
		border: 3px;
	}

	table tr td {
	}
</style>

<div>
		<table border="1px">
		<tr> 
			<th>Password</th>
			<th>Conform Password </th>
			<th>Action</th>
		</tr>
		<form action="#" method="post">
		<tr> 
			<td>Type</td>
			<td><input type="password" name="password1"></td>
			<td><input type="password" name="password2"></td>
			<td><input type="submit" name="submit"></td>
		</tr>
		</form>


<?php

if(isset($_POST["submit"]))
{

$pass1=$_POST["password1"];
$pass2=$_POST["password2"];






?>
		<tr> 
			<td>MD5</td>
			<td><?php echo md5($pass1); ?></td>
			<td><?php echo md5($pass2); ?></td>
			<td>

				<?php 

				if(md5($pass1)== md5($pass2)){

					echo "Same";
				}

				else {
					echo "not same";
				}

				?>


			</td>
		</tr>


<tr> 
			<td>SH1</td>
			<td><?php echo sha1($pass1); ?></td>
			<td><?php echo sha1($pass2); ?></td>
			<td>

				<?php 

				if(sha1($pass2)==sha1($pass1)){

					echo "Same";
				}

				else {
					echo "not same";
				}

				?>


			</td>
		</tr>









<?php  } ?>


<tr> 		<td>Text</td>
			<td><?php echo $pass1 ?></td>
			<td><?php echo $pass2 ?></td>
			<td><?php 

				if($pass1==$pass2){

					echo "Same";
				}

				else {
					echo "not same";
				}

				?>
</td>
</tr>
		</table>
</div>