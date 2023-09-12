<?php

require "functions.php";

$title = "Test Get Photo";

$connect = mysqli_connect(
    'mydatabase', # service name (as in docker-compose.yml)
    'php_docker', # username of phpMyadmin
    'password', # password
    'camagru_database' # db name in phpMyadmin
);

$query = "SELECT * FROM photos JOIN users ON user_fk = user_id ORDER BY date_created DESC";
$results = mysqli_query($connect, $query);

require "./views/test_get_photo.view.php";
