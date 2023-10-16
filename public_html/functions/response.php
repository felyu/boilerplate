<?php
require_once 'ip.php';

function response($code = 200, $message = null, $data = null) {
    global $ip;
    $ip = ip();
    
    // Clear the old headers
    header_remove();
    // Set the actual code
    http_response_code($code);
    // Set the header to make sure cache is forced
    header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
    // Treat this as JSON
    header('Content-Type: application/json');

    // Define an array of possible HTTP status codes and messages
    $status = array(
        200 => 'OK',
        201 => 'Created',
        204 => 'No Content',
        400 => 'Bad Request',
        401 => 'Unauthorized',
        403 => 'Forbidden',
        404 => 'Not Found',
        422 => 'Unprocessable Entity',
        500 => 'Internal Server Error'
    );

    // Determine the status message based on the code
    $status_message = isset($status[$code]) ? $status[$code] : '';
    if (!$status_message) {
        $status_message = 'Unknown Status';
    }

    // Build the response array
    $response = array(
        'timestamp' => date("d-m-Y H:i:s"),
        'status' => $code,
        'status_message' => $status_message,
        'message' => $message,
        'data' => $data,
        'ip' => $ip,
    );

    // Return the encoded JSON
    return json_encode($response);
}


?>

