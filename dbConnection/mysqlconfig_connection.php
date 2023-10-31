<?php
    DEFINE('DB_USER', 'root');
    DEFINE('DB_PASSWORD', 'root');
    DEFINE('DB_HOST', 'localhost');
    DEFINE('DB_NAME', 'db');

    $dbc = @mysqli_connect()
    OR dies('Could not connect to MySQL: ' .mysql_connect_error());
?>