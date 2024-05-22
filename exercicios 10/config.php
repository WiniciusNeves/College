<?php
$con = mysqli_connect("127.0.0.1:3307", "root", "");
$database = mysqli_select_db($con, "animals");
/*
if (!$con || !mysqli_select_db($con, 'animals')) {
    die('Could not connect to database');
} else {
    echo "Connected to database";
}*/