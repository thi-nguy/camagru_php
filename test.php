<?php

echo "hello world";

$connect = mysqli_connect('mydatabase', # service name (as in docker-compose.yml)
'php_docker', # username of phpMyadmin
'password', # password
'camagru_database'); # db name in phpMyadmin

$query = "SELECT * from php_docker_table";
$result = mysqli_query($connect, $query);

echo '<h1>MySQL content:</h1>';
while($record = mysqli_fetch_assoc($result)){
    echo '<h2>'.$record['title'].'</h2>';
    echo '<p>'.$record['body'].'</p>';

    echo 'Posted: '.$record['date_created'];
} 