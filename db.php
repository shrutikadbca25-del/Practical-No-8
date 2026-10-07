<?php

$conn = mysqli_connect("localhost", "root", "", "Student Data");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>