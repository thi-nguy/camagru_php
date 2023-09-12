<?php require "partials/header.php"; ?>
<?php require "partials/navbar.php"; ?>

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php while ($one_photo = mysqli_fetch_assoc($results)) : ?>
            <div class="col">
                <div class="card shadow-sm">
                    <img src="data:image/jpeg;base64,<?= base64_encode(($one_photo['image'])) ?>" alt="catphoto">
                    <div class="card-body">
                        <p class="card-text"><?= $one_photo['image_name'] ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-body-secondary">Author: <?= $one_photo['username'] ?></small>
                            <small class="text-body-secondary">created at: <?= $one_photo['date_created'] ?></small>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

<?php require "partials/footer.php"; ?>