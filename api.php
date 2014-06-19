<?php

  require_once('config.php');
  // Get cURL resource
  $curl = curl_init();
  // Set some options - we are passing in a useragent too here
  curl_setopt_array($curl, array(
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL => 'http://testcURL.com/?item1=value&item2=value2',
      CURLOPT_USERAGENT => 'Codular Sample cURL Request'
  ));
  // Send the request & save response to $resp
  $resp = curl_exec($curl);
  // Close request to clear up some resources
  curl_close($curl);
  
  echo $resp;
?>
