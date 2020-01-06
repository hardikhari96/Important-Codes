<?php 
	$ip = '192.168.0.0';

	$iparry = explode('.',$ip);
	print_r($iparry);

	function scanip(){

		curl

	}
	
?>


<table>
	
	<tr> 
		<th> No </th>
		<th> IP List </th>
		<th> Status </th>
	</tr>
<?php 
	
	for($i=0;$i<=254;$i++)
	{

?>
	<tr>
		<td><?php echo $i +1; ?></td>
		<td> <?php  
		$ip = $iparry[0].'.'.$iparry[1].'.'.$iparry[2].'.'.$i;
		
		echo $ip;  ?> </td>
		<td></td>
	</tr>

<?php 

	}

?>
</table>