<?php
    $conn = new mysqli("localhost", "root", "","biblioteca");
    if($conn->connect_error){
        die("<p>Connection to serve failed: ".$conn->connect_error."</p>");
    }
?>