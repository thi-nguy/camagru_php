<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>This is a paragraph! </p>
    <?php 
    foreach($_SERVER as $title => $value) {
        echo "$title = $value<br>";
    }
    echo $_GET["name"]; // with localhost/index.php?name=nhung&job=dev ==> get: nhung
    echo "<br>";
    echo $_GET["job"]; // with localhost/index.php?name=nhung&job=dev ==> get: dev
    ?>
    
</body>
</html>