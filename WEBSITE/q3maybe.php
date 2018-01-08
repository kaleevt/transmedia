<?php

// Only process the form if $_POST isn't empty
if ( ! empty( $_POST ) ) {
    
    // Connect to MySQL
    $mysqli = new mysqli( 'localhost', 'pugsleyn', '!OWVmNjQzMmVhNzA2Zjk3ODMxMDA1NWY3', 'DB1pugsleyn' );
    
    // Check the connection
    if ( $mysqli->connect_error) {
        die( 'Connect Error: ' . $mysqli->connect_errno . ': ' . $mysqli->connect_error );
    }
    
    // Insert the data
    $sql = "UPDATE question SET maybe = maybe + 1 WHERE Qid = 3";
    $insert = $mysqli->query($sql);    

    // Print response from MySQL
    if ( $insert ) {
        echo "Success! Row ID: {$mysqli->insert_id}";
    } else {
        die("Error: {$mysqli->errno} : {$mysqli->error}");
    }
    
    // Close the connection
    $mysqli->close();
}
    // Redirects to previous page
    header("location: javascript://history.go(-1)");
?>