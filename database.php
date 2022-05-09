<?php
    define('HOST','localhost');
    define('DB_NAME','projet_web_test');
    define('USER','root');
    define('PASS','');

    $link = mysqli_connect(HOST, USER, PASS, DB_NAME);

    if($link == false){
        die("ERROR ; couldn't connect".mysqli_connect_error());
    }
?>