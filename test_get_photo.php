<?php
require_once("./template/main_template.php");

$connect = mysqli_connect(
    'mydatabase', # service name (as in docker-compose.yml)
    'php_docker', # username of phpMyadmin
    'password', # password
    'camagru_database'
); # db name in phpMyadmin

$query = "SELECT * from photo";
$result = mysqli_query($connect, $query);

echo '<h1>MySQL content:</h1>';
while ($record = mysqli_fetch_assoc($result)) {
    $base64Image = base64_encode(($record['image']));
    echo '<img src="data:image/jpeg;base64,' . $base64Image . '" alt="Image"><br>';
    echo '<h2>' . $record['name'] . '</h2>';
    echo 'Posted: ' . $record['date_created'];
}
?>
<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
            <div class="card shadow-sm">
                <img src="https://img.freepik.com/premium-photo/beautiful-cat-photo-beautiful-cat-cute-cat-cat-picpet_860112-7.jpg?w=1380" alt="catphoto">
                <div class="card-body">
                    <p class="card-text">Name of the photo</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-body-secondary">Author: pony</small>
                        <small class="text-body-secondary">created at: 11/11/2011</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <img src="https://img.freepik.com/premium-photo/beautiful-cat-photo-beautiful-cat-cute-cat-cat-picpet_860112-7.jpg?w=1380" alt="catphoto">
                <div class="card-body">
                    <p class="card-text">Name of the photo</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-body-secondary">Author: pony</small>
                        <small class="text-body-secondary">created at: 11/11/2011</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <img src="https://img.freepik.com/premium-photo/beautiful-cat-photo-beautiful-cat-cute-cat-cat-picpet_860112-7.jpg?w=1380" alt="catphoto">
                <div class="card-body">
                    <p class="card-text">Name of the photo</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-body-secondary">Author: pony</small>
                        <small class="text-body-secondary">created at: 11/11/2011</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <img src="https://img.freepik.com/premium-photo/beautiful-cat-photo-beautiful-cat-cute-cat-cat-picpet_860112-7.jpg?w=1380" alt="catphoto">
                <div class="card-body">
                    <p class="card-text">Name of the photo</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-body-secondary">Author: pony</small>
                        <small class="text-body-secondary">created at: 11/11/2011</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <img src="https://img.freepik.com/premium-photo/beautiful-cat-photo-beautiful-cat-cute-cat-cat-picpet_860112-7.jpg?w=1380" alt="catphoto">
                <div class="card-body">
                    <p class="card-text">Name of the photo</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-body-secondary">Author: pony</small>
                        <small class="text-body-secondary">created at: 11/11/2011</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once("./template/footer.php");
?>