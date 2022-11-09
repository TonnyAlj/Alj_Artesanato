<?php
    $user = "root";
    $pass = "";
    $host = "localhost";
    $db = "db_aljartesanato";

    $_conn = mysqli_connect($host, $user, $pass);

    mysqli_set_charset($_conn, "utf8mb4");

    mysqli_select_db($_conn, $db);

?>