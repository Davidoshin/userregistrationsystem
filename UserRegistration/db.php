<?php
    // Enter your host name, database username, password, and database name.
    // In case you have set database password , fix it in , if not set it as empty. 
    $con = mysqli_connect("localhost","root","","UserRegistration");
    // Check connection
    if (mysqli_connect_error()){
        echo "Failed to connect to MySQL Database: " . mysqli_connect_error();
    }
