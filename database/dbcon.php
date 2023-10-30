<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "progreen";

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = mysqli_connect($servername, $username, $password, $dbname);
?>
