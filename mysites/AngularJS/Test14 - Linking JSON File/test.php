<?php
$options  = array (
  'http' => 
  array (
    'ignore_errors' => true,
    'method' => 'POST',
    'header' => 
    array (
      0 => 'authorization: Bearer YOUR_API_TOKEN',
      1 => 'Content-Type: application/x-www-form-urlencoded',
    ),
    'content' => 
     http_build_query(  array (
        'content' => 'This reply is now edited via the API.',
        'status' => 'approved',
      )),
  ),
);
 
$context  = stream_context_create( $options );
$response = file_get_contents(
    'https://public-api.wordpress.com/rest/v1/sites/82974409/comments/29',
    false,
    $context
);
$response = json_decode( $response );
?>