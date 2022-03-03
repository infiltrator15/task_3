<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "task3";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
    echo "Database Connection Failed".mysqli_connect_error();
}
