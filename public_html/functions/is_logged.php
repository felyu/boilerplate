<?php

function is_logged($database){
    session_start();
    
    // Check for the session_token and uuid
    if (!isset($_SESSION['uuid']) || !isset($_SESSION['session_token'])) {
        return false;
        exit();
    }

    // Check if the session_token and uuid are valid
    $result = $database->has('sessions', [
        'uuid' => $_SESSION['uuid'],
        'session_token' => $_SESSION['session_token']
    ]);

    if (!$result) {
        return false;
        exit();
    }

    return true;
}


?>