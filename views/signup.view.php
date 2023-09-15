<?php require "partials/header.php"; ?>
<?php require "partials/navbar.php"; ?>

<form action="signup.php" method="post">
    <h1 class="h3 mb-3 fw-normal">Sign Up</h1>

    <div class="form-floating">
        <input type="username" class="form-control" name="username" placeholder="name">
        <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
        <input type="email" class="form-control" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" name="passwordRepeat" placeholder="Repeat password">
        <label for="floatingPassword">Repeat Password</label>
    </div>

    <input class="btn btn-primary w-100 py-2" type="submit" name="submit" value="Submit" />
</form>

<?php require "partials/footer.php"; ?>