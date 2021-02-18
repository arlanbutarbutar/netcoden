<?php
    $conn=mysqli_connect("localhost","root","ArlanBB270899","netcoden");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }