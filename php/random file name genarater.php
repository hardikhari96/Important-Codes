<?php




		function name($fname,$no=0)
		{

					intval($no);
					$nm=explode(".",$fname); // break full name into name and extenction as array formate
					$ext=end($nm);  // end save last array name which is extenction

					$temp=explode(" ", microtime());  // 

					$br[0]=current($temp); 
					$first=end($temp);
					$br[1]=explode(".",$br[0]);
					$last=end($br[1]);   
					return $first.$last.$no.".".$ext;

		}


$file_name="hf.hfk..@uyg78987u bjklbj.png";
echo $file_name."<br>";
$i=0;
while($i<6){


	echo name($file_name,$i)."<br/>";
$i++;
}
?>
<!-----

example     muajkj.jpg   ->   20540405645840653.jpg
			lll_akj.png  ->   2504543652121.2123.jpg

1) The end() function moves the internal pointer to, and outputs, the last element in the array.
2) The explode() function breaks a string into an array.  explode(".",$str))
3) The microtime() function returns the current Unix timestamp with microseconds.






  --->