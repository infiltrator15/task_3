<?php

include "db_conn.php";

$sql = "SELECT * FROM news ORDER BY id DESC";
$result = mysqli_query($conn, $sql);