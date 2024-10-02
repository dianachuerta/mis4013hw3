<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('129.15.65.247', 'PROJECTO_HW3USER', DB_PASSWORD, DB_NAME);
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
