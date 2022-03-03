<?php

include 'db_conn.php';

if(isset($_POST['submit'])){
    $anons = $_POST['anons'];
    $article = $_POST['article'];

    $sql = mysqli_query($conn, "INSERT INTO news(anons, article) VALUES('$anons','$article')");
    header("Location:index.php");
}