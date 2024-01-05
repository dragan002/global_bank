<?php

require_once('db_credentials.php');

// Create connection
function db_connect() {
    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "<script>console.log('Connected successfully')</script>";
        echo "you are in";
    }
    return $conn;
}

function db_disconnect($conn) {
    if (isset($conn)) {
        mysqli_close($conn);
    }
}


