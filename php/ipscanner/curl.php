<?php

function checkip($ip) {

		$curl = curl_init($ip);
 
 		if (!$curl) {
            die("Couldn't initialize a cURL handle"); 
 		}
        else{
        	//echo "initialized <br>";
        	 // Follow redirects, if any
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true); 

        // Fail the cURL request if response code = 400 (like 404 errors) 
        curl_setopt($curl, CURLOPT_FAILONERROR, true); 

        // Return the actual result of the curl result instead of success code
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Wait for 10 seconds to connect, set 0 to wait indefinitely
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);

        // Execute the cURL request for a maximum of 50 seconds
        curl_setopt($curl, CURLOPT_TIMEOUT, 50);
        }
  
          if (curl_errno($curl)) 
        {
            echo  'cURL error: ' . curl_error($curl); 
        	
        	return false;
        } 
        else 
        { 
            // cURL executed successfully
            $data = json_encode(curl_getinfo($curl));
            header('Content-Type: application/json');
            print_r($data);

        }

}

$ip=$_GET['ip'];
checkip($ip);
?>