<?php

    $conn =new mysqli("localhost","Akanth","","intern_project");
    if($conn->connect_error){
        echo "Error in database connection!!";
        die;
    }
?>