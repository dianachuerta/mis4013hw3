<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('mis-hw03.mysql.database.azure.com', 'PROJECTO_HW3USER', DB_PASSWORD, DB_NAME);
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
