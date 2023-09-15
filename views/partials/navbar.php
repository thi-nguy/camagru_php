<nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Fourth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">Camagru</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample04">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="<?= urlIs("/index.php") ? 'nav-link active' : 'nav-link' ?>" aria-current="page" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="<?= urlIs("/test.php") ? 'nav-link active' : 'nav-link' ?>" href="./test.php">Test</a>
                </li>
                <li class="nav-item">
                    <a class="<?= urlIs("/test_get_photo.php") ? 'nav-link active' : 'nav-link' ?>" href="./test_get_photo.php">Test get Photo</a>
                </li>
                <li class="nav-item">
                    <a class="<?= urlIs("/signup.php") ? 'nav-link active' : 'nav-link' ?>" href="./signup.php">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>