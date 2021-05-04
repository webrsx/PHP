<?php
    const HOSTNAME = "localhost";
    const USERNAME = "root";
    const USERPASSWORD = "root";
    const DB = "galleryHW5";

    $connect = mysqli_connect(HOSTNAME, USERNAME, USERPASSWORD, DB) or die("Ошибка соединения с базой данных");
?>