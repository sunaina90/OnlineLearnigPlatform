<?php

    $servername = "localhost";
    $uname = "root";
    $pws = "";
    $db_name="finalproj_db";

    $conn = mysqli_connect($servername, $uname, $pws, $finalproj_db);

    if(!$conn) {
        echo "Connection Failed";
    }