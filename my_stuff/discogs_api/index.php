<?php
  // Define the API endpoint URL
  $url = 'https://api.discogs.com/masters/207564';
  
  // Initialize the cURL session
  $ch = curl_init();
  
  // Set the URL and other options
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: MyDiscogsClient/1.0'));

  // Make the API call
  $response = curl_exec($ch);
  
  // Check for errors
  if (curl_errno($ch)) {
    echo 'Error making API call: ' . curl_error($ch);
    die();
  }
  
  // Close the cURL session
  curl_close($ch);
  
  // Process the response
  $data = json_decode($response);
  //echo 'Title: ' . $data->title;

  echo '<pre>';
  print_r($data);
  echo'</pre>';
?>
